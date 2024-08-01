<?php

use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckRoleAdminMiddleware;
use App\Http\Middleware\CheckRoleStaffMiddleware;
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
    return view('client.includes.main');
});

/**
 * client view 
 */
Route::get('/login',[AuthController::class, 'ShowViewLogin'] );
Route::post('/login',[AuthController::class, 'LoginRequest'] )->name('login');
Route::post('/register',[AuthController::class, 'RegisterRequest'] )->name('register');
Route::get('/register',[AuthController::class, 'ShowviewRegister'] );
Route::post('/logout',[AuthController::class, 'logout'] )->name('logout');

/**
 * pages view
 */

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


Route::get('admin',function(){
    return view('admin.index');
})->middleware(CheckRoleAdminMiddleware::class);
Route::get('staff',function(){
    return view('staff.index');
})->middleware(CheckRoleStaffMiddleware::class);