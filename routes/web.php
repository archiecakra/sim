<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UnitController;

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

//Stok Routes
//Pembelian Barang
Route::resource('/items/purchases', PurchaseController::class);
//Barang
Route::resource('/items/categories', CategoryController::class);
Route::resource('/items/units', UnitController::class);
Route::resource('/items', ItemsController::class);

//Data Pengguna Routes
Route::get('/users', [UserController::class, 'index']);
Route::resource('employees', EmployeeController::class);
Route::resource('customers', CustomerController::class);

//Data Supplier
Route::resource('suppliers', SupplierController::class);

//Auth Routes
Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
