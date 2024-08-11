<?php

use App\Http\Controllers\GameController;
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

Route::get('/', [GameController::class, 'index'])->name('list-game');
Route::get('/create', [GameController::class, 'create'])->name('create');
Route::post('/store', [GameController::class, 'store'])->name('store');
Route::get('/{id}/edit', [GameController::class, 'edit'])->name('edit');
Route::put('/{id}/update', [GameController::class, 'update'])->name('update-game');
Route::delete('/{id}/destroy', [GameController::class, 'destroy'])->name('destroy');
