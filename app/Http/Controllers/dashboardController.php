<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function viewsProfile()
    {
        return view('seller.profileAdmin');
    }

    public function viewsAdmin()
    {
        return view('admin.profileAdmin');
    }

    public function viewsProductAdmin()
    {
        // $products = User::where('role', 'Seller')->with('products.category')->get();
        $products = Product::with('category.categoryAdmin', 'user')->get();
        return view('admin.productAdmin', compact('products'));
    }

    public function sellerView()
    {
        $sellers = User::where('role', 'Seller')->get();
        return view('admin.sellerAdmin', compact('sellers'));
    }
}
