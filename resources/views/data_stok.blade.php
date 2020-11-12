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
          <div class="card-header">
            <h3 class="card-title">Tambah Barang</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            Start creating your amazing application!
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
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
                  <th>#</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>jumlah</th>
                  <th>satuan</th>
                  <th>harga</th>
                  <th>expiry</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>0420-bako-01</td>
                  <td>beras lele</td>
                  <td>10</td>
                  <td>karung</td>
                  <td>Rp. 200000</td>
                  <td>12-01-2012</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>0119-bako-02</td>
                  <td>beras lele</td>
                  <td>10</td>
                  <td>karung</td>
                  <td>Rp. 200000</td>
                  <td>12-01-2012</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>1019-bako-03</td>
                  <td>beras lele</td>
                  <td>10</td>
                  <td>karung</td>
                  <td>Rp. 200000</td>
                  <td>12-01-2012</td>
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