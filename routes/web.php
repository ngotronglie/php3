<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;

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

// client
Route::group(['prefix' => ''], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    
});

// login
Route::get('/login' ,[AdminController::class, 'login'])->name('admin.login');
Route::post('/login' ,[AdminController::class, 'check_login']);


// register
Route::get('/register' ,[AdminController::class, 'register'])->name('admin.register');
Route::post('/register' ,[AdminController::class, 'check_register']);

// -------------------
Route::get('/register' , function(){
    return view('client.pages.register');
});



Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    
});

// pages

Route::get('/contact' , function(){
    return view('client.pages.contact');
});
Route::get('/blog' , function(){
    return view('client.pages.blog');
});
Route::get('/blog-detail' , function(){
    return view('client.pages.blog-detail');
});
Route::get('/shop' , function(){
    return view('client.pages.shop');
});
Route::get('/wishlist' , function(){
    return view('client.pages.wishlist');
});
Route::get('/cart' , function(){
    return view('client.pages.cart');
});
Route::get('/checkout' , function(){
    return view('client.pages.checkout');
});

Route::get('/about' , function(){
    return view('client.pages.about');
});