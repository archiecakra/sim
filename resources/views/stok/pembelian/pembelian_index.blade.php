@extends('layouts/main')

@section('title', 'Transaksi Pembelian Barang')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item">Transaksi Pembelian</a></li>
@endsection

@section('content')
<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        @if (session('message'))
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>{{ session('message') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Transaksi Pembelian</h3>
            <a href="{{ url('/items/purchases/create') }}" class="btn btn-primary float-right text-white">Tambah Transaksi Pembelian</a>
          </div>
          <div class="card-body">
            <table class="table table-sm bg-light table-bordered table-striped text-center table-hover">
              <thead>
                <tr>
                  <th class="align-middle" scope="col">#</th>
                  <th class="align-middle" scope="col">Kode Transaksi</th>
                  <th class="align-middle" scope="col">Supplier</th>
                  <th class="align-middle" scope="col">Barang</th>
                  <th class="align-middle" scope="col">Total Pembelian</th>
                  <th class="align-middle" scope="col">Keterangan</th>
                  <th class="align-middle" scope="col">Tanggal Pembelian</th>
                  <th class="align-middle" scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($purchases as $purchase)
                  <tr>
                    <td scope="row" class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $purchase->kode_pembelian }}</td>
                    <td class="align-middle text-left">{{ $purchase->supplier->nama }}</td>
                    <td class="align-middle text-left">
                      <ul class="product-list">
                        @foreach ($purchase->purchaseDetail->items as $item)
                          <li>{{ $item->nama.' @Rp.'.$item->harga_beli.' x '.$item->pivot->jumlah.' '.$item->unit->nama }}</li>
                        @endforeach
                      </ul>
                    </td>
                    <td class="align-middle">{{ 'Rp. '.$purchase->total_bayar.' ,-' }}</td>
                    <td class="align-middle text-left">{{ $purchase->keterangan }}</td>
                    <td class="align-middle">{{ $purchase->created_at }}</td>
                    <td class="align-middle"></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
@endsection