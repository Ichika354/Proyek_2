<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::withCount('categories', 'products')->find(auth()->user()->id);

        $categoryCount = $user->categories_count;
        $productCount = $user->products_count;

        $sellerCount = User::where('role', 'Seller')->count();
        $countProducts = Product::count();
        $buyerCount = User::where('role', 'Buyer')->count();

        return view('seller.dashboard',compact('categoryCount', 'productCount','sellerCount','countProducts','buyerCount'));
    }
}
