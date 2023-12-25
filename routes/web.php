<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryAdminController;
use App\Http\Controllers\CategoryBuyerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileBuyer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/profileBuyer',[ProfileBuyer::class,'viewsProfile'])->name('Profile.Buyer');

Route::get('/category',[CategoryController::class,'views'])->name('Category.Seller');
Route::get('/categoryBuyer',[CategoryBuyerController::class,'views'])->name('Category.Buyer');
Route::get('/addCategory',[CategoryController::class,'viewsAdd'])->name('Category.Add');
Route::post('/storeCategory',[CategoryController::class,'store'])->name('Category.Store');

Route::get('/sellerAdmin',[DashboardController::class, 'sellerView'])->name('Seller.Admin');

Route::get('/profileAdmin',[DashboardController::class,'viewsAdmin'])->name('Profile.Admin');
Route::get('/productAdmin',[DashboardController::class,'viewsProductAdmin'])->name('Product.Admin');
Route::get('/categoryAdmin',[CategoryAdminController::class,'views'])->name('Category.Admin');
Route::get('/storeCategory',[CategoryAdminController::class,'viewStore'])->name('Category.Store.Admin');
Route::post('/storeCategoryPost',[CategoryAdminController::class,'store'])->name('Category.Store.Admin.Post');
Route::get('/updateCategory/{id}',[CategoryAdminController::class,'viewUpdate'])->name('Category.Update.Admin');
Route::put('/updateCategoryPut/{id}',[CategoryAdminController::class,'update'])->name('Category.Store.Admin.Put');



Route::get('/order/{id}',[OrderController::class,'views'])->name('Order.Views');
Route::post('/checkout',[OrderController::class,'checkout'])->name('Checkout');
Route::post('/midtrans-callback', [OrderController::class, 'callback'])->name('Callback');



Route::get('/product',[ProductController::class,'views'])->name('Product.Seller');
Route::get('/productDetailBuyer/{id}',[ProductController::class,'viewsBuyerDetail'])->name('Product.Buyer');
Route::get('/addProduct',[ProductController::class,'viewsAdd'])->name('Product.Add');
Route::get('/productImage/{id}', [ProductController::class, 'getProductImage'])->name('Product.Image');
Route::post('/storeProduct',[ProductController::class,'store'])->name('Product.Store');


Route::get('/categoryProduct/{$categoryName}',[CategoryController::class,'productsByCategory'])->name('Product.By.Category');

Route::post('/getkabupaten',[AddressController::class,'getkabupaten'])->name('getkabupaten');
Route::post('/getkecamatan',[AddressController::class,'getkecamatan'])->name('getkecamatan');
Route::post('/getdesa',[AddressController::class,'getdesa'])->name('getdesa');



// routes/web.php
Route::middleware(['auth'])->group(function () {
    Route::get('/productsEdit/{id}',[ProductController::class,'updateViews'])->name('Products.Edit.Views');
    Route::put('/productsUpdate/{id}', [ProductController::class, 'update'])->name('Products.Update');
    Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('Products.Destroy');
    
    Route::get('/categoryDetail/{id}',[CategoryController::class,'categoryDetail'])->name('Category.Detail');
    Route::get('/categoryEdit/{id}',[CategoryController::class,'updateViews'])->name('Category.Edit.Views');
    Route::put('/categoryUpdate/{id}', [CategoryController::class, 'update'])->name('Category.Update');
    
    Route::get('/Address', [AddressController::class, 'Adress'])->name('Address');
    Route::post('/addAddress', [AddressController::class, 'addAdress'])->name('Add.Address');
    Route::delete('/deleteAddress/{id}', [AddressController::class, 'deleteAdress'])->name('Delete.Address');

    Route::get('/editAdressView/{id}', [AddressController::class, 'editAdressView'])->name('Edit.Address');
    Route::put('/editAdress/{id}', [AddressController::class, 'editAdress'])->name('Edit.Address.Put');
});
