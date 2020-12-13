@extends('layouts/main')

@section('title', 'Data Stok Gudang')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item"><a href="#">Data Stok</a></li>
<li class="breadcrumb-item"><a href="#">Ubah Data Barang</a></li>
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
            <h3 class="card-title">Ubah Data Barang</h3>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ url('/items/'.$item->id) }}" enctype="multipart/form-data">
              @method('patch')
              @csrf
              <div class="form-group">
                <label for="nama">Nama</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                  </div>
                <input type="text" class="form-control form-control-sm @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Sunlight 50 gr" value="{{ $item->nama }}">
                  @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
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
                      <input type="text" class="form-control form-control-sm @error('merk') is-invalid @enderror" id="merk" name="merk" placeholder="Sunlight 50 gr" value="{{ $item->merk }}">
                      @error('merk')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
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
                      <input type="text" class="form-control form-control-sm @error('kategori') is-invalid @enderror" id="kategori" name="kategori" placeholder="Sunlight 50 gr" value="{{ $item->kategori }}">
                      @error('kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
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
                      <input type="text" class="form-control form-control-sm @error('sub_kategori') is-invalid @enderror" id="sub_kategori" name="sub_kategori" placeholder="Sunlight 50 gr" value="{{ $item->sub_kategori }}">
                      @error('sub_kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-2">
                  <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="text" class="form-control form-control-sm @error('stok') is-invalid @enderror" id="stok" name="stok" placeholder="23" value="{{ $item->stok }}">
                    @error('stok')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="col-2">
                  <div class="form-group">
                    <label for="satuan">Satuan</label>
                    <input type="text" class="form-control form-control-sm @error('satuan') is-invalid @enderror" id="satuan" name="satuan" placeholder="23" value="{{ $item->satuan }}">
                    @error('satuan')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group">
                    <label for="harga_beli">Harga Beli</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas">Rp.</i></span>
                      </div>
                      <input type="text" class="form-control form-control-sm @error('harga_beli') is-invalid @enderror" id="harga_beli" name="harga_beli" placeholder="45000" value="{{ $item->harga_beli }}">
                      @error('harga_beli')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group">
                    <label for="harga">Harga Jual</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas">Rp.</i></span>
                      </div>
                      <input type="text" class="form-control form-control-sm @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="50000" value="{{ $item->harga }}">
                      @error('harga')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="expired_at">Tanggal Expired</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                      </div>
                      <input type="text" class="form-control form-control-sm @error('expired_at') is-invalid @enderror" id="expired_at" name="expired_at" placeholder="Sunlight 50 gr" value="{{ $item->expired_at }}">
                      @error('expired_at')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="gambar">Gambar Barang</label>
                    <input type="file" class="form-control-file @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
                    @error('gambar')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
            
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button class="btn btn-md btn-primary float-right">Update Barang</button>
            <a href="{{ url('/items') }}" class="btn btn-md btn-secondary">Kembali</a>
          </div>
            </form>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-3">
        <div class="card">
          <img class="card-img-top" src="{{ url('/'.$item->gambar) }}" alt="Card image cap">
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