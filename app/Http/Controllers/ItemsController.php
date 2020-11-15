<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Item::all();
        return view('data/stok/stok_index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data/stok/stok_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'sub_kategori' => 'required',
            'merk' => 'required',
            'satuan' => 'required',
            'harga' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'stok' => 'required|numeric',
            'expired_at' => 'required|date',
            'gambar' => 'required|image'
        ]);

        $namaGambar = $request->nama.'.'.$request->gambar->extension();

        Item::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'sub_kategori' => $request->sub_kategori,
            'merk' => $request->merk,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
            'harga_beli' => $request->harga_beli,
            'stok' => $request->stok,
            'expired_at' => $request->expired_at,
            'gambar' => $request->gambar->storeAs('gambar', $namaGambar)
        ]);

        return redirect('/items')->with('message', 'Data Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('data/stok/stok_show', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('data/stok/stok_edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        if ($request->hasFile('gambar')) {
            $namaGambar = $request->nama.'.'.$request->gambar->extension();
            $gambar = $request->gambar->storeAs('gambar', $namaGambar);
        } else {
            $gambar = $item->gambar;
        }

        Item::where('id', $item->id)
            ->update([
                'nama' => $request->nama,
                'kategori' => $request->kategori,
                'sub_kategori' => $request->sub_kategori,
                'merk' => $request->merk,
                'satuan' => $request->satuan,
                'harga' => $request->harga,
                'harga_beli' => $request->harga_beli,
                'stok' => $request->stok,
                'expired_at' => $request->expired_at,
                'gambar' => $gambar
            ]);
        return redirect('/items')->with('message', 'Data Barang Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        Item::destroy($item->id);
        return redirect('/items')->with('message', 'Data Barang Berhasil Dihapus');
    }
}
