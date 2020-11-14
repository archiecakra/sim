<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

//Route stok barang
Route::get('/items', [ItemsController::class, 'index']);
Route::get('/items/create', [ItemsController::class, 'create']);
Route::get('/items/{item}', [ItemsController::class, 'show']);
Route::post('/items', [ItemsController::class, 'store']);
Route::delete('/items/{item}', [ItemsController::class, 'destroy']);