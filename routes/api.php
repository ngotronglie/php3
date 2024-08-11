<?php

use App\Http\Controllers\Api\GameController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/', [GameController::class, 'index'])->name('list-game');
Route::post('/store', [GameController::class, 'store'])->name('store');
Route::put('/{id}/update', [GameController::class, 'update'])->name('update-game');
Route::delete('/{id}/destroy', [GameController::class, 'destroy'])->name('destroy');