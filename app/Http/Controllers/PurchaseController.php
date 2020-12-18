<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Purchase;
use App\Models\PurchaseDetail;
use App\Models\Supplier;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = Purchase::with('purchaseDetail.items')->orderBy("created_at", "desc")->get();
        return view('stok.pembelian.pembelian_index', compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        $items = Item::all();
        return view('stok.pembelian.pembelian_create', compact('suppliers', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = Purchase::all()->count();
        Purchase::create([
            'kode_pembelian' => 'PRC'.$count,
            'supplier_id' => $request->supplier_id,
            'total_bayar' => $request->total_bayar,
            'keterangan' => $request->keterangan,
        ]);

        $purchase = Purchase::latest()->first();
        $pdetail = PurchaseDetail::create([
            'purchase_id' => $purchase->id,
        ]);
        $items = $request->input('item_id', []);
        $jumlah = $request->input('jumlah', []);
        for ($iteration=0; $iteration < count($items); $iteration++) {
            $pdetail->items()->attach($items[$iteration], ['jumlah' => $jumlah[$iteration]]);
            $detail_stok = $pdetail->items()->where('id', $items[$iteration])->first();
            $detail_stok->stok += $jumlah[$iteration];
            $detail_stok->save();
            // dd($jumlah[$iteration]);
        }
        
        return redirect('/items/purchases')->with('message', 'Data Pembelian Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        $id = $purchase->id;
        // dd($id);

        $pdetail = PurchaseDetail::with(['items' => function ($query, $id) {
            $query->where('id', $id);
        }])->first();

        
        return view('stok.pembelian.pembelian_edit', compact('purchase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
