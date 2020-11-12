@extends('layout/main')

@section('title', 'Data Stok Gudang')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item"><a href="#">Data Stok</a></li>
@endsection

@section('content')
<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card collapsed-card bg-secondary">
          <div class="card-header" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <h3 class="card-title">Tambah Barang</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="ip_publik">Jumlah Barang</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="ip_publik" data-inputmask="'alias': 'ip'" data-mask placeholder="112.140.160.112">
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="exampleFormControlFile1">Gambar</label>
                  <input type="file" class="form-control-file border" id="exampleFormControlFile1">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="ip_publik">Jumlah Barang</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="ip_publik" data-inputmask="'alias': 'ip'" data-mask placeholder="112.140.160.112">
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="ip_lokal">Satuan</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="ip_lokal" data-inputmask="'alias': 'ip'" data-mask placeholder="172.18.1.112">
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="ip_lokal">Harga</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="ip_lokal" data-inputmask="'alias': 'ip'" data-mask placeholder="172.18.1.112">
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="ip_lokal">Expired Date</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="ip_lokal" data-inputmask="'alias': 'ip'" data-mask placeholder="172.18.1.112">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button class="btn btn-md btn-primary float-right">Tambah</button>
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Stok Gudang</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-sm bg-light table-bordered table-striped text-center table-hover">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Kode Barang</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Sub Kategori</th>
                  <th scope="col">Merk</th>
                  <th scope="col">Harga Jual</th>
                  <th scope="col">Harga Beli</th>
                  <th scope="col">Stok</th>
                  <th scope="col">Satuan</th>
                  <th scope="col">expiry</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($items as $item)
                <tr>
                  <td scope="row">{{ $loop->iteration }}</td>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->nama }}</td>
                  <td>{{ $item->kategori }}</td>
                  <td>{{ $item->sub_kategori }}</td>
                  <td>{{ $item->merk }}</td>
                  <td>Rp. {{ $item->harga }},00</td>
                  <td>Rp. {{ $item->harga_beli }},00</td>
                  <td>{{ $item->stok }}</td>
                  <td>{{ $item->satuan }}</td>
                  <td>{{ $item->expired_at }}</td>
                  <td>{{ $item->gambar }}</td>
                  <td></td>
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