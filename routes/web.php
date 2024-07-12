<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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
Route::get('/hihi', function () {
    return view('index');
});
Route::get('/categories', function () {
//    $data = DB::table('categories')->get();  // lấy ra tất cả bản ghi trong bảng categories
   $data = DB::table('categories')->first(); // lọc ra bản ghi đầu tiên trong bảng categories
    dd($data);
    return $data;
});
