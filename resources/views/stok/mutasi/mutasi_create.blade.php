@extends('layouts/main')

@section('title', 'Data Supplier')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item"><a href="#">Barang</a></li>
<li class="breadcrumb-item"><a href="#">Kategori</a></li>
<li class="breadcrumb-item"><a href="#">Tambah Kategori</a></li>
@endsection

@section('content')
<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-9">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Mutasi Stok</h3>
          </div>
          <form method="POST" action="{{ url('/items/categories') }}">
            <div class="card-body">
              @csrf
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-3 col-form-label">Nama Barang</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="staticEmail" value="Buku Gambar" disabled>
                </div>
              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-3 col-form-label">Stok Awal</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="staticEmail" value="20" disabled>
                </div>
              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-3 col-form-label">Jenis Mutasi</label>
                <div class="col-sm-9">
                  <select name="" id="" class="form-control">
                    <option value="">Penambahan</option>
                    <option value="">Pengurangan</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-3 col-form-label">Stok Mutasi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="staticEmail" value="20" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="nama">Keterangan Mutasi Stok</label>
                <textarea class="form-control" name="keterangan" id="keterangan" rows="3" placeholder="Silahkan isi keterangan pembelian jika perlu...."></textarea>
                @error('nama')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="button" class="btn btn-md btn-primary float-right">Tambah Kategori</button>
              <a href="{{ url('/items/mutations') }}" class="btn btn-md btn-secondary">Kembali</a>
            </div>
          </form>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
@endsection