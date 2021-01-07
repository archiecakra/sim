<?php

namespace App\Http\Controllers\Reports;
use App\Http\Controllers\Controller;

use App\Models\Item;
use App\Models\Sale;
use App\Models\StockMutation;
use App\Models\User;

use Carbon\Carbon;
use Illuminate\Http\Request;

class SaleReportController extends Controller
{
    public function sale(Request $request)
    {
        if ($request->tanggal==NULL) {
            # code...
            $sales = Sale::with('user', 'items')->where('status', 'Lunas')->orderBy("created_at", "desc")->get();
        } else {
            # code...
            if ($request->user_id==NULL) {
                # code...
                switch ($request->jenis) {
                    case 'Harian':
                        # code...
                        $sales = Sale::with('user', 'items')->where('status', 'Lunas')->whereDate('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                        break;
                    
                    case 'Bulanan':
                        # code...
                        $sales = Sale::with('user', 'items')->where('status', 'Lunas')->whereMonth('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                        break;
                    
                    case 'Tahunan':
                        # code...
                        $sales = Sale::with('user', 'items')->where('status', 'Lunas')->whereYear('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
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
                        $sales = Sale::with('user', 'items')->where('status', 'Lunas')->where('user_id', $request->user_id)->whereDate('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                        break;
                    
                    case 'Bulanan':
                        # code...
                        $sales = Sale::with('user', 'items')->where('status', 'Lunas')->where('user_id', $request->user_id)->whereMonth('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                        break;
                    
                    case 'Tahunan':
                        # code...
                        $sales = Sale::with('user', 'items')->where('status', 'Lunas')->where('user_id', $request->user_id)->whereYear('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                        break;
                        
                    default:
                        # code...
                        break;
                }
            }

        }
        $users = User::where('role', 'customer')->get();

        $data = Sale::where('status', 'Lunas')->get()->groupBy(function($d) {
            return Carbon::parse($d->created_at)->format('F');
        });
        $chart_data = [];
        foreach ($data as $key => $value) {
            $chart_data[$key] = count($value);
        }
        $chart = new SaleReportController;
        $chart->labels = (array_keys($chart_data));
        $chart->datasets = (array_values($chart_data));
        return view('toko.laporan.penjualan_index', compact('sales', 'users', 'chart', 'request'));
    }

    public function sale_print(Request $request)
    {
        if ($request->tanggal==NULL) {
            # code...
            $sales = Sale::with('user', 'items')->where('status', 'Lunas')->orderBy("created_at", "desc")->get();
        } else {
            # code...
            if ($request->user_id==NULL) {
                # code...
                switch ($request->jenis) {
                    case 'Harian':
                        # code...
                        $sales = Sale::with('user', 'items')->where('status', 'Lunas')->whereDate('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                        break;
                    
                    case 'Bulanan':
                        # code...
                        $sales = Sale::with('user', 'items')->where('status', 'Lunas')->whereMonth('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                        break;
                    
                    case 'Tahunan':
                        # code...
                        $sales = Sale::with('user', 'items')->where('status', 'Lunas')->whereYear('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
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
                        $sales = Sale::with('user', 'items')->where('status', 'Lunas')->where('user_id', $request->user_id)->whereDate('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                        break;
                    
                    case 'Bulanan':
                        # code...
                        $sales = Sale::with('user', 'items')->where('status', 'Lunas')->where('user_id', $request->user_id)->whereMonth('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                        break;
                    
                    case 'Tahunan':
                        # code...
                        $sales = Sale::with('user', 'items')->where('status', 'Lunas')->where('user_id', $request->user_id)->whereYear('created_at', $request->tanggal)->orderBy("created_at", "desc")->get();
                        break;
                        
                    default:
                        # code...
                        break;
                }
            }

        }
        $users = User::where('role', 'customer')->get();
        return view('toko.laporan.penjualan_print', compact('sales', 'users', 'request'));
    }
}
