<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryAdmin;
use Illuminate\Http\Request;

class CategoryBuyerController extends Controller
{
    public function views(){
        $categories = CategoryAdmin::all();
        return view('seller.detail.categoryBuyer',compact('categories'));
    }
}
