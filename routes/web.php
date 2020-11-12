<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;

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

Route::get('/transaksi/pembelian', function () {
    return view('transaksi_pembelian');
});

Route::get('/transaksi/penjualan', function () {
    return view('transaksi_penjualan');
});

Route::get('/laporan/gudang', function () {
    return view('laporan_gudang');
});

Route::get('/laporan/pembelian', function () {
    return view('laporan_pembelian');
});

Route::get('/laporan/penjualan', function () {
    return view('laporan_penjualan');
});

Route::get('/data/customer', function () {
    return view('data_customer');
});

Route::get('/data/stok', [ItemController::class, 'index']);

Route::get('/data/supplier', function () {
    return view('data_supplier');
});