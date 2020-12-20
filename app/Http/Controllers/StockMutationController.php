<?php

namespace App\Http\Controllers;

use App\Models\StockMutation;
use Illuminate\Http\Request;

class StockMutationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stok.mutasi.mutasi_index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StockMutation  $stockMutation
     * @return \Illuminate\Http\Response
     */
    public function show(StockMutation $stockMutation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StockMutation  $stockMutation
     * @return \Illuminate\Http\Response
     */
    public function edit(StockMutation $stockMutation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StockMutation  $stockMutation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockMutation $stockMutation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StockMutation  $stockMutation
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockMutation $stockMutation)
    {
        //
    }
}
