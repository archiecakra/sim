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
        return view('stok.pembelian.pembelian_index');
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
        $items = $request->input('item_id');
        $jumlah = $request->input('jumlah');
        Purchase::create([
            'kode_pembelian' => 'PRC'.$count,
            'supplier_id' => $request->supplier_id,
            'total_bayar' => $request->total_bayar,
        ])->purchaseDetail()->create([
            'purchase_id' => $count,
        ])->items()->attach(
            $items,
            $jumlah,
        );
        // PurchaseDetail::create([
        //     'purchase_id' => $count,
        // ]);
        // $pdetail = PurchaseDetail::create($request->except('_token'));
        // $items = $request->input('item_id', []);
        // $jumlah = $request->input('jumlah', []);
        // for ($iteration=0; $iteration < count($items); $iteration++) {
        //     if ($items[$iteration] != '') {
        //         $order->products()->attach($products[$product], ['quantity' => $quantities[$product]]);
        //     }
        // }
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
        //
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
