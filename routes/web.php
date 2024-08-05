<?php

use App\Http\Controllers\Admin\AdminBannerController;
use App\Http\Controllers\Admin\AdminDanhMucController;
use App\Http\Controllers\Admin\AdminSanPhamController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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
Route::get('/login', [AuthController::class, 'ShowViewLogin']);
Route::post('/login', [AuthController::class, 'LoginRequest'])->name('login');
Route::post('/register', [AuthController::class, 'RegisterRequest'])->name('register');
Route::get('/register', [AuthController::class, 'ShowviewRegister']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/**
 * pages view
 */

Route::get('/contact', function () {
    return view('client.pages.contact');
});
Route::get('/blog', function () {
    return view('client.pages.blog');
});
Route::get('/blog-detail', function () {
    return view('client.pages.blog-detail');
});
Route::get('/shop', function () {
    return view('client.pages.shop');
});
Route::get('/wishlist', function () {
    return view('client.pages.wishlist');
});
Route::get('/cart', function () {
    return view('client.pages.cart');
});
Route::get('/checkout', function () {
    return view('client.pages.checkout');
});

Route::get('/about', function () {
    return view('client.pages.about');
});
Route::get('/product-detail/{id}', [ProductController::class, 'detailSanPham'])->name('product-detail');


Route::prefix('admin')->middleware([CheckRoleAdminMiddleware::class])->group(function () {
    // Route cho quản lý danh mục
    Route::prefix('categories')->group(function () {
        Route::get('/', [AdminDanhMucController::class, 'index'])->name('admin.categories.list');
        Route::get('/create', [AdminDanhMucController::class, 'create'])->name('admin.categories.create');
        Route::post('/store', [AdminDanhMucController::class, 'store'])->name('admin.categories.store');
        Route::get('/show/{id}', [AdminDanhMucController::class, 'show'])->name('admin.categories.show');
        Route::get('/{id}/edit', [AdminDanhMucController::class, 'edit'])->name('admin.categories.edit');
        Route::put('/{id}/update', [AdminDanhMucController::class, 'update'])->name('admin.categories.update');
        Route::delete('/{id}/destroy', [AdminDanhMucController::class, 'destroy'])->name('admin.categories.destroy');
    });

    //banner
    Route::prefix('banners')->group(function () {
        Route::get('/', [AdminBannerController::class, 'index'])->name('admin.banners.list');
        Route::get('/create', [AdminBannerController::class, 'create'])->name('admin.banners.create');
        Route::post('/store', [AdminBannerController::class, 'store'])->name('admin.banners.store');
        Route::get('/show/{id}', [AdminBannerController::class, 'show'])->name('admin.banners.show');
        Route::get('/{id}/edit', [AdminBannerController::class, 'edit'])->name('admin.banners.edit');
        Route::put('/{id}/update', [AdminBannerController::class, 'update'])->name('admin.banners.update');
        Route::delete('/{id}/destroy', [AdminBannerController::class, 'destroy'])->name('admin.banners.destroy');
    });

    // Route cho quản lý sản phẩm
    Route::prefix('product')->group(function () {
        Route::get('/', [AdminSanPhamController::class, 'index'])->name('admin.products.list');
        Route::get('/show/{id}', [AdminSanPhamController::class, 'show'])->name('admin.products.show');
        Route::get('/create', [AdminSanPhamController::class, 'create'])->name('admin.products.create');
        Route::post('/store', [AdminSanPhamController::class, 'store'])->name('admin.products.store');
        Route::get('{id}/edit', [AdminSanPhamController::class, 'edit'])->name('admin.products.edit');
        Route::put('/{id}/update', [AdminSanPhamController::class, 'update'])->name('admin.products.update');
        Route::delete('{id}/destroy', [AdminSanPhamController::class, 'destroy'])->name('admin.products.destroy');
    });


    // route quan li user 
    Route::prefix('user')->group(function () {
        Route::get('/', [AdminUserController::class, 'index'])->name('admin.users.list');
        Route::get('/show/{id}', [AdminUserController::class,  'show'])->name('admin.users.show');
        Route::get('/create', [AdminUserController::class,  'create'])->name('admin.users.create');
        Route::post('/store', [AdminUserController::class,  'store'])->name('admin.users.store');
        Route::get('{id}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
        Route::put('/{id}/update', [AdminUserController::class,  'update'])->name('admin.users.update');
        Route::delete('{id}/destroy', [AdminUserController::class,  'destroy'])->name('admin.users.destroy');
    });
});
Route::get('admin', function () {
    return view('admin.includes.main');
})->middleware(CheckRoleAdminMiddleware::class);
Route::get('staff', function () {
    return view('staff.index');
})->middleware(CheckRoleStaffMiddleware::class);

Route::prefix('staff')->middleware([CheckRoleStaffMiddleware::class])->group(function () {
    // Route cho quản lý banner
    Route::prefix('categories')->group(function () {
    });
});
