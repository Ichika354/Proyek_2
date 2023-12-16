<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function views()
    {
        $seller = Auth::user();
        $products = $seller->products()->with('category')->get();

        return view('seller.product', compact('products'));
    }

    public function viewsAdd()
    {
        $categories = Category::all();
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
            'photo' => 'required|string',
            'stock' => 'required|numeric',
            'detail' => 'required|string',
        ]);

        $productData = [
            'id_user' => Auth::user()->id,
            'produkName' => $request->produkName,
            'id_category' => $request->id_category,
            'price' => $request->price,
            'photo' => $request->photo,
            'stock' => $request->stock,
            'detail' => $request->detail,
        ];

        Product::create($productData);

        return redirect()->route('Product.Seller')->with('success', 'Product added successfully.');
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $product = $user->products()->where('id_produk', $id)->first();

        if (!$product) {
            // Handle jika produk tidak ditemukan atau tidak dimiliki oleh pengguna
            abort(404);
        }

        $request->validate([
            'id_category' => 'required|exists:categories,id_category',
            'produkName' => 'required|string|max:255',
            'price' => 'required|numeric',
            'photo' => 'required|string',
            'stock' => 'required|numeric',
            'detail' => 'required|string'
        ]);

        $product->update($request->all());

        return redirect()->route('Product.Seller')->with('success', 'Produk berhasil diperbarui.');
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
