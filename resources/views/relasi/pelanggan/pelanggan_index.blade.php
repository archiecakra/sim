@extends('layouts/main')

@section('title', 'Data Pelanggan')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item"><a href="#">Barang</a></li>
<li class="breadcrumb-item"><a href="#">Kategori</a></li>
@endsection

@section('content')
<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-9">
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
            <h3 class="card-title">Daftar Pelanggan</h3>
            <a href="{{ url('/items/categories/create') }}" class="btn btn-primary float-right text-white">Tambah Pelanggan</a>
          </div>
          <div class="card-body">
            <div class="table-responsive-md">
              <table id="datatable" class="table table-sm bg-light table-striped text-center table-hover">
                <thead class="thead-light">
                  <tr>
                    <th class="align-middle" scope="col">Nama</th>
                    <th class="align-middle" scope="col">No Telpon</th>
                    <th class="align-middle" scope="col">Email</th>
                    <th class="align-middle" scope="col">Username</th>
                    <th class="align-middle" scope="col">Tanggal Registrasi</th>
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