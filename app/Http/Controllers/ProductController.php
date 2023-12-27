<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function views()
    {
        if (Auth::user()->role == 'Seller') {
            $seller = Auth::user();
            $products = $seller->products()->with('category')->get();
        } else {
            $products = Product::take(10)->get();
        }

        return view('seller.product', compact('products'));
    }

    public function getProductImage($id)
    {
        $product = Product::findOrFail($id);

        $product = Product::find($id);

        if ($product) {
            $imageData = $product->image_blob;
            $imageType = $product->image_type;

            return Response::make($imageData, 200, [
                'Content-Type' => $imageType,
            ]);
        }

        return abort(404);
    }

    public function viewsBuyerDetail($id)
    {

        $products = Product::with('category')->findOrFail($id);

        return view('seller.detail.detailProdukBuyer', compact('products'));
    }


    public function viewsAdd()
    {
        // Ambil pengguna yang login
        $user = Auth::user();

        // Ambil kategori berdasarkan pengguna yang login
        $categories = $user->categories()->with('categoryAdmin')->get();

        return view('seller.create.createProduct', compact('categories'));
    }


    public function updateViews($id_produk)
    {
        $user = Auth::user();
        $product = $user->products()->find($id_produk);

        if (!$product) {
            // Handle jika produk tidak ditemukan atau tidak dimiliki oleh pengguna
            abort(404);
        }
        $categories = Category::all();
        return view('seller.update.productUpdate', compact('product', 'categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'id_category' => 'required|exists:categories,id_category',
            'produkName' => 'required|string|max:255',
            'price' => 'required|numeric',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // maksimum 2MB
            'stock' => 'required|numeric',
            'detail' => 'required|string',
        ]);

        $image = $request->file('photo');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/produk'), $imageName);

        $productData = [
            'id_user' => Auth::user()->id,
            'produkName' => $request->produkName,
            'id_category' => $request->id_category,
            'price' => $request->price,
            'photo' => $imageName,
            'stock' => $request->stock,
            'detail' => $request->detail,
        ];

        Product::create($productData);

           return redirect()->route('Product.Seller')->with('success', 'Product added successfully.');
    }

    public function update(Request $request, $id)
    {
        $user = auth()->user();
        $product = $user->products()->findOrFail($id);

        $request->validate([
            'id_category' => 'required|exists:categories,id_category',
            'produkName' => 'required|string|max:255',
            'price' => 'required|numeric',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'stock' => 'required|numeric',
            'detail' => 'required|string',
        ]);

        // Handle file upload
        if ($request->hasFile('photo')) {
            // Menghapus photo lama
            if ($product->photo) {
                Storage::delete('img/produk/' . $product->photo);
            }

            // Mengupload photo baru
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/produk'), $imageName);

            // Mengupdate data pro$product dengan photo baru
            $product->update([
                'photo' => $imageName,
            ]);
        }

        // Update data produk
        $product->update([
            'id_category' => $request->id_category,
            'produkName' => $request->produkName,
            'price' => $request->price,
            'stock' => $request->stock,
            'detail' => $request->detail,
        ]);

        return redirect()->route('Product.Seller')->with('success', 'Product has been updated');
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Pastikan pengguna yang sedang login memiliki akses
        // atau produk dimiliki oleh pengguna yang sedang login
        if ($product->id_user == auth()->user()->id) {
            $product->delete();
            return redirect()->route('Product.Seller')->with('success', 'Product deleted successfully.');
        } else {
            return redirect()->route('Product.Seller')->with('error', 'You do not have permission to delete this product.');
        }
    }
}
