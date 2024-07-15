<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
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
    return view('client.index');
});

Route::get('/about', function () {
    return view('client.pages.about');
});

Route::get('/shop', function () {
    return view('client.pages.shop');
});

Route::get('/product-detail', function () {
    return view('client.pages.product-detail');
});
Route::get('/cart', function () {
    return view('client.pages.cart');
});
Route::get('/checkout', function () {
    return view('client.pages.checkout');
});
Route::get('/blog', function () {
    return view('client.pages.blog');
});
Route::get('/blog-detail', function () {
    return view('client.pages.blog-detail');
});
Route::get('/login-register', function () {
    return view('client.pages.login-register');
});

Route::resource('/', MainController::class);
Route::resource('/contact', ContactController::class);