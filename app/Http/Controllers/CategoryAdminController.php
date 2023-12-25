<?php

namespace App\Http\Controllers;

use App\Models\CategoryAdmin;
use Illuminate\Http\Request;

class CategoryAdminController extends Controller
{
    public function views()
    {
        $categories = CategoryAdmin::all();
        return view('admin.categoryAdmin', compact('categories'));
    }

    public function viewStore()
    {
        return view('admin.create.createCategory');
    }

    public function viewUpdate($id)
    {
        $category = CategoryAdmin::findOrFail($id);
        return view('admin.update.updateCategory', compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
            'icon' => 'required|string'
        ]);

        $addCategory = [
            'category' => $request->category,
            'icon' => $request->icon
        ];

        CategoryAdmin::create($addCategory);

        return redirect()->route('Category.Admin')->with('success', 'Category Added Successfully');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'category' => 'required|string|max:255',
            'icon' => 'required|string'
        ]);

        $category = CategoryAdmin::findOrFail($id);
        $category->update([
            'category' => $request->input('category'),
            'icon' => $request->input('icon'),
        ]);

        return redirect()->route('Category.Admin')->with('success', 'Category has been updated');
    }
}
