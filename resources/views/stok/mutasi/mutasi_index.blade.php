@extends('layouts/main')

@section('title', 'Mutasi Stok Barang')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item">Mutasi Stok</a></li>
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
            <h3 class="card-title">Daftar Mutasi Stok</h3>
            <a href="{{ url('/items/purchases/create') }}" class="btn btn-primary float-right text-white">Tambah Mutasi Stok</a>
          </div>
          <div class="card-body">
            <div class="table-responsive-md">
              <table id="datatable" class="table table-sm bg-light table-bordered table-striped text-center table-hover">
                <thead>
                  <tr>
                    <th class="align-middle" scope="col">Tanggal Pembelian</th>
                    <th class="align-middle" scope="col">Kode Transaksi</th>
                    <th class="align-middle" scope="col">Supplier</th>
                    <th class="align-middle" scope="col">Barang</th>
                    <th class="align-middle" scope="col">Total Pembelian</th>
                    <th class="align-middle" scope="col">Keterangan</th>
                    <th class="align-middle" scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
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