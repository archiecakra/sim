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
            'kode_pembelian' => 'PRC'.sprintf("%04s", $count++),
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
        $suppliers = Supplier::all();
        $items = Item::all();
        $detail = PurchaseDetail::with('items')->where('id', $purchase->id)->first();
        return view('stok.pembelian.pembelian_edit', compact('purchase', 'detail', 'items', 'suppliers'));
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
        // dd($request);
        Purchase::where('id', $purchase->id)->update([
            'supplier_id' => $request->supplier_id,
            'total_bayar' => $request->total_bayar,
            'keterangan' => $request->keterangan,
        ]);

        $pdetail = PurchaseDetail::where('id', $purchase->id)->first();
        // dd($pdetail->items);
        // dd($pdetail->items[0]->pivot->jumlah);

        $items = $request->input('item_id', []);
        $jumlah = $request->input('jumlah', []);
        for ($iteration=0; $iteration < count($items); $iteration++) {
            $item = Item::where('id', $items[$iteration])->first();
            dd($item);
            $detail_stok = $pdetail->items()->where('id', 3)->first();
            dd($detail_stok);
            $detail_stok->stok = ($detail_stok->stok - $pdetail->items[$iteration]->pivot->jumlah) + $jumlah[$iteration];
            $detail_stok->save();
            $pdetail->items()->sync($items[$iteration], ['jumlah' => $jumlah[$iteration]]);
        }
        
        return redirect('/items/purchases')->with('message', 'Data Pembelian Dengan Code : '.$purchase->kode_pembelian.' Berhasil Diubah');
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
