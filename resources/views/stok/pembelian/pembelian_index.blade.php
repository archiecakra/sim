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
                  <th class="align-middle" scope="col">Total Pembelian</th>
                  <th class="align-middle" scope="col">Tanggal Pembelian</th>
                  <th class="align-middle" scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row" class="align-middle"></td>
                  <td class="align-middle"></td>
                  <td class="align-middle"></td>
                  <td class="align-middle"></td>
                  <td class="align-middle"></td>
                  <td class="align-middle"></td>
                </tr>
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