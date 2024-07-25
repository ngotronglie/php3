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

Route::group(['prefix' => ''], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    
});
Route::group(['prefix' => '/admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    
});

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