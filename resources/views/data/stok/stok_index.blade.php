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
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Stok Gudang</h3>

            <a href="/items/create" class="btn btn-primary float-right text-white">Tambah Barang</a>
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