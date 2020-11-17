<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;

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

//Index Route
Route::get('/', [LoginController::class, 'showLoginForm']);

//Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index']);

//Stok Barang Routes
// Route::get('/items', [ItemsController::class, 'index']);
// Route::get('/items/create', [ItemsController::class, 'create']);
// Route::get('/items/{item}', [ItemsController::class, 'show']);
// Route::post('/items', [ItemsController::class, 'store']);
// Route::delete('/items/{item}', [ItemsController::class, 'destroy']);
// Route::get('/items/{item}/edit', [ItemsController::class, 'edit']);
// Route::patch('/items/{item}', [ItemsController::class, 'update']);
Route::resource('items', ItemsController::class);

//Data Pengguna Routes
Route::get('/users', [UserController::class, 'index']);
Route::resource('employees', EmployeeController::class);
Route::resource('customers', CustomerController::class);


//Auth Routes
Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
