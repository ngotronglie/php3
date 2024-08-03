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


Route::prefix('admin')->middleware([CheckRoleAdminMiddleware::class])->group(function () {
    // Route cho quản lý danh mục
    Route::prefix('categories')->group(function () {
        // Route::get('/', [CategoryController::class, 'index'])->name('admin.categories.index');
        // Route::get('{id}', [CategoryController::class, 'show'])->name('admin.categories.show');
        // Route::get('create', [CategoryController::class, 'create'])->name('admin.categories.create');
        // Route::post('create', [CategoryController::class, 'store'])->name('admin.categories.store');
        // Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
        // Route::put('{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
        // Route::delete('{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
    });

    // Route cho quản lý sản phẩm
    Route::prefix('products')->group(function () {
        // Route::get('/', [ProductController::class, 'index'])->name('admin.products.index');
        // Route::get('{id}', [ProductController::class, 'show'])->name('admin.products.show');
        // Route::get('create', [ProductController::class, 'create'])->name('admin.products.create');
        // Route::post('create', [ProductController::class, 'store'])->name('admin.products.store');
        // Route::get('{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
        // Route::put('{id}', [ProductController::class, 'update'])->name('admin.products.update');
        // Route::delete('{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
    });
});
Route::get('admin',function(){
    return view('admin.index');
})->middleware(CheckRoleAdminMiddleware::class);
Route::get('staff',function(){
    return view('staff.index');
})->middleware(CheckRoleStaffMiddleware::class);

Route::prefix('staff')->middleware([CheckRoleStaffMiddleware::class])->group(function () {
    // Route cho quản lý banner
    Route::prefix('categories')->group(function () {
       
    });
});