<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function views()
    {
        $seller = Auth::user();
        $categories = $seller->categories()->with('categoryAdmin')->get();

        return view('seller.category', compact('categories'));
    }

    public function viewsAdd()
    {
        $categories = CategoryAdmin::all();
        return view('seller.create.createCategory', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        // Pastikan id_category_admin belum ada dalam database
        // $existingCategory = Category::where('id_category_admin', $request->category)->exists();

        // if ($existingCategory) {
        //     // Kategori sudah ada, tampilkan pesan kesalahan
        //     return redirect()->route('Category.Seller')->with('error', 'Category Already Exists');
        // }

        $categoryData = [
            'id_user' => Auth::user()->id,
            'id_category_admin' => $request->category,
        ];

        Category::create($categoryData);

        // Tampilkan notifikasi sukses
        Session::flash('success', 'Category Has Been Added');

        return redirect()->route('Category.Seller');
    }


    public function updateViews($id)
    {
        $category = Category::findOrFail($id);
        $categories = CategoryAdmin::all();

        return view('seller.update.categoryUpdate', compact('category', 'categories'));
    }

    public function categoryDetail($id)
    {
        $category = Category::findOrFail($id);
        return view('seller.detail.detailCategory', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'id_category_admin' => $request->input('category'),
        ]);

        return redirect()->route('Category.Seller')->with('success', 'Category has been updated');
    }

    // ProductController.php

    public function productsByCategory($categoryName)
    {
        $category = Category::where('name', $categoryName)->first();

        if (!$category) {
            abort(404); // Atau sesuaikan dengan cara penanganan kesalahan yang sesuai
        }

        $products = $category->products;

        return view('products.by_category', compact('products', 'category'));
    }
}
