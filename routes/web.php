<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrationController;
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

// Route::group(['middleware' => 'auth'], function(){
// });
Route::get('/dashboard', [dashboardController::class, 'views'])->name('Dashboard');


Route::get('/login', [loginController::class, 'views'])->name('Login');
Route::get('/registration', [registrationController::class, 'views'])->name('Registration');
Route::get('/back', [registrationController::class, 'back'])->name('BackHome');
Route::post('/login', [loginController::class, 'login'])->name('Login.Post');
Route::post('/registration', [registrationController::class, 'registration'])->name('Registration.Post');
Route::get('/logout', [loginController::class, 'views'])->name('Logout');
