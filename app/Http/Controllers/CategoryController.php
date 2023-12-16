<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function views()
    {
        $seller = Auth::user();
        $categories = $seller->categories;

        return view('seller.category', compact('categories'));
    }

    public function viewsAdd()
    {
        return view('seller.create.createCategory');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        $categoryData = [
            'id_user' => Auth::user()->id, // Mendapatkan ID pengguna yang login
            'category' => $request->category,
        ];

        Category::create($categoryData);

        return redirect()->route('Category.Seller')->with('success', 'Product added successfully.');
    }

    public function updateViews($id)
    {
        $category = Category::findOrFail($id);

        return view('seller.update.categoryUpdate', compact('category'));
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
            // Tambahkan validasi untuk kolom lainnya jika diperlukan
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'category' => $request->input('category'),
            // Update kolom lainnya sesuai kebutuhan
        ]);

        return redirect()->route('Category.Seller')->with('success', 'Kategori berhasil diupdate.');
    }
}
