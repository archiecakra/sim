@extends('layout/main')

@section('title', 'Data Stok Gudang')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item"><a href="#">Data Stok</a></li>
<li class="breadcrumb-item"><a href="#">Tambah Barang</a></li>
@endsection

@section('content')
<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-9">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tambah Barang</h3>
          </div>
          <div class="card-body">
            <form method="POST" action="/items/create">
              <div class="form-group">
                <label for="nama">Nama</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                  </div>
                  <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Sunlight 50 gr">
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="merk">Merk</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                      </div>
                      <input type="text" class="form-control form-control-sm" id="merk" name="merk" placeholder="Sunlight 50 gr">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                      </div>
                      <input type="text" class="form-control form-control-sm" id="kategori" name="kategori" placeholder="Sunlight 50 gr">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="sub_kategori">Sub-Kategori</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                      </div>
                      <input type="text" class="form-control form-control-sm" id="sub_kategori" name="sub_kategori" placeholder="Sunlight 50 gr">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-1">
                  <div class="form-group">
                    <label for="stok">Jumlah</label>
                    <input type="text" class="form-control form-control-sm" id="stok" name="stok" placeholder="23">
                  </div>
                </div>
                <div class="col-1">
                  <div class="form-group">
                    <label for="satuan">Satuan</label>
                    <input type="text" class="form-control form-control-sm" id="satuan" name="satuan" placeholder="23">
                  </div>
                </div>
                <div class="col-5">
                  <div class="form-group">
                    <label for="harga_beli">Harga Beli (Rupiah)</label>
                    <input type="text" class="form-control form-control-sm" id="harga_beli" name="harga_beli" placeholder="23">
                  </div>
                </div>
                <div class="col-5">
                  <div class="form-group">
                    <label for="harga">Harga Jual (Rupiah)</label>
                    <input type="text" class="form-control form-control-sm" id="harga" name="harga" placeholder="23">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="expired_at">Merk</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                      </div>
                      <input type="text" class="form-control form-control-sm" id="expired_at" name="expired_at" placeholder="Sunlight 50 gr">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Gambar Barang</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button class="btn btn-md btn-primary float-right">Tambah</button>
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-3">
        <div class="card">
          <img class="card-img-top" src="https://cdn.jpegmini.com/user/images/slider_puffin_before_mobile.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Tinjauan Gambar Barang</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
@endsection