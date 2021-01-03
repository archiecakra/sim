<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Purchase;
use App\Models\PurchaseDetail;
use App\Models\Supplier;
use App\Models\StockMutation;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function purchase(Request $request)
    {
        // dd($request);
        if ($request->tanggal==NULL) {
            # code...
            $purchases = Purchase::with('purchaseDetail.items')->orderBy("created_at", "desc")->get();
        } else {
            # code...
            switch ($request->jenis) {
                case 'Harian':
                    # code...
                    $purchases = Purchase::with('purchaseDetail.items')->whereDate('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                    break;
                
                case 'Bulanan':
                    # code...
                    $purchases = Purchase::with('purchaseDetail.items')->whereMonth('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                    break;
                
                case 'Tahunan':
                    # code...
                    $purchases = Purchase::with('purchaseDetail.items')->whereMonth('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                    break;
                    
                default:
                    # code...
                    break;
            }
        }
        $suppliers = Supplier::all();
        return view('toko.laporan.pembelian_index', compact('purchases', 'suppliers'));
    }

    public function sale()
    {
        $sales = Sale::with('user', 'items')->get();
        // dd($sale);
        return view('penjualan.penjualan_index', compact('sales'));
    }
    
    public function stock()
    {
        $mutations = StockMutation::all();
        return view('stok.mutasi.mutasi_index', compact('mutations'));
    }
}
