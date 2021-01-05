<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Purchase;
use App\Models\PurchaseDetail;
use App\Models\Supplier;
use App\Models\StockMutation;

use Carbon\Carbon;
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
            if ($request->supplier_id==NULL) {
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
                        $purchases = Purchase::with('purchaseDetail.items')->whereYear('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                        break;
                        
                    default:
                        # code...
                        break;
                }
            } else {
                # code...
                switch ($request->jenis) {
                    case 'Harian':
                        # code...
                        $purchases = Purchase::with('purchaseDetail.items')->where('supplier_id', $request->supplier_id)->whereDate('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                        break;
                    
                    case 'Bulanan':
                        # code...
                        $purchases = Purchase::with('purchaseDetail.items')->where('supplier_id', $request->supplier_id)->whereMonth('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                        break;
                    
                    case 'Tahunan':
                        # code...
                        $purchases = Purchase::with('purchaseDetail.items')->where('supplier_id', $request->supplier_id)->whereYear('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                        break;
                        
                    default:
                        # code...
                        break;
                }
            }

        }
        $suppliers = Supplier::all();

        $data = Purchase::get()->groupBy(function($d) {
            return Carbon::parse($d->created_at)->format('F');
        });
        $chart_data = [];
        foreach ($data as $key => $value) {
            $chart_data[$key] = count($value);
            // $chart_labels = Carbon::parse(key($chart_data))->format('F');
            // echo key($chart_data);
        }
        $chart = new ReportController;
        $chart->labels = (array_keys($chart_data));
        // $chart->labels = (Carbon::parse()->format('F'));
        $chart->datasets = (array_values($chart_data));
        // var_dump(json_encode($chart->datasets));
        return view('toko.laporan.pembelian_index', compact('purchases', 'suppliers', 'chart'));
    }

    public function purchase_print(Request $request)
    {
        # code...
        // dd($usermcount);
        if ($request->tanggal==NULL) {
            # code...
            $purchases = Purchase::with('purchaseDetail.items')->orderBy("created_at", "desc")->get();
        } else {
            # code...
            if ($request->supplier_id==NULL) {
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
                        $purchases = Purchase::with('purchaseDetail.items')->whereYear('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                        break;
                        
                    default:
                        # code...
                        break;
                }
            } else {
                # code...
                switch ($request->jenis) {
                    case 'Harian':
                        # code...
                        $purchases = Purchase::with('purchaseDetail.items')->where('supplier_id', $request->supplier_id)->whereDate('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                        break;
                    
                    case 'Bulanan':
                        # code...
                        $purchases = Purchase::with('purchaseDetail.items')->where('supplier_id', $request->supplier_id)->whereMonth('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                        break;
                    
                    case 'Tahunan':
                        # code...
                        $purchases = Purchase::with('purchaseDetail.items')->where('supplier_id', $request->supplier_id)->whereYear('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                        break;
                        
                    default:
                        # code...
                        break;
                }
            }

        }
        $suppliers = Supplier::all();
        return view('toko.laporan.pembelian_print', compact('purchases', 'suppliers', 'request'));
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
