<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// seller
Route::get('/profileSeller',[DashboardController::class,'viewsProfile'])->name('Profile.Seller');

Route::get('/category',[CategoryController::class,'views'])->name('Category.Seller');
Route::get('/addCategory',[CategoryController::class,'viewsAdd'])->name('Category.Add');
Route::post('/storeCategory',[CategoryController::class,'store'])->name('Category.Store');

Route::get('/product',[ProductController::class,'views'])->name('Product.Seller');
Route::get('/addProduct',[ProductController::class,'viewsAdd'])->name('Product.Add');
Route::post('/storeProduct',[ProductController::class,'store'])->name('Product.Store');

// routes/web.php
Route::middleware(['auth'])->group(function () {
    Route::get('/productsEdit/{id}',[ProductController::class,'updateViews'])->name('Products.Edit.Views');
    Route::put('/productsUpdate/{id}', [ProductController::class, 'update'])->name('Products.Update');
    Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('Products.Destroy');
    
    Route::get('/categoryDetail/{id}',[CategoryController::class,'categoryDetail'])->name('Category.Detail');
    Route::get('/categoryEdit/{id}',[CategoryController::class,'updateViews'])->name('Category.Edit.Views');
    Route::put('/categoryUpdate/{id}', [CategoryController::class, 'update'])->name('Category.Update');

});
