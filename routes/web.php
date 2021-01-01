<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StockMutationController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;

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
//Mutasi Stok
Route::resource('/items/mutations', StockMutationController::class)->only([
    'index', 'create', 'store'
]);
//Barang
Route::resource('/items/categories', CategoryController::class);
Route::resource('/items/units', UnitController::class);
Route::resource('/items', ItemsController::class);

//Data Relasi
Route::resource('employees', EmployeeController::class)->parameters(['employees' => 'user']);
Route::resource('customers', CustomerController::class)->parameters(['customers' => 'user']);
Route::resource('suppliers', SupplierController::class);

//Penjualan
Route::resource('sales', SaleController::class);

//Customer routes
Route::resource('shop', ShopController::class);
Route::resource('cart', CartController::class);

//Auth Routes
Auth::routes();
