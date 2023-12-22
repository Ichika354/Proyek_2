<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryBuyerController extends Controller
{
    public function views(){
        $category = Category::all();
        return view('seller.detail.categoryBuyer',compact('category'));
    }
}
