<?php

use App\Http\Controllers\Login;
use App\Http\Controllers\Regis;
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
    return view('main');
});

Route::get('/admin', function () {
    return view('Layouts.Admin.mainAdmin');
});

Route::get('/login', [Login::class, 'login'])->name('login');
Route::get('/back', [Login::class, 'back'])->name('back');
Route::get('/regis', [Regis::class, 'regis'])->name('regis');
Route::post('/regis',[Regis::class,'store']);
