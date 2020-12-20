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
          </div>
          <div class="card-body">
            <div class="table-responsive-md">
              <table id="datatable" class="table table-sm bg-light table-bordered table-striped text-center table-hover">
                <thead>
                  <tr>
                    <th class="align-middle" scope="col">Barang</th>
                    <th class="align-middle" scope="col">Jenis Mutasi</th>
                    <th class="align-middle" scope="col">Stok Awal</th>
                    <th class="align-middle" scope="col">Stok Akhir</th>
                    <th class="align-middle" scope="col">Keterangan</th>
                    <th class="align-middle" scope="col">Tanggal Pembelian</th>
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