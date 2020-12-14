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
    <div class="row justify-content-center">
      <div class="col-10">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tambah Transaksi Pembelian</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="supplier_id">Nama Supplier</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                </div>
                <select class="custom-select custom-select-md" name="supplier_id" id="supplier_id">
                  <option value="">--- Pilih Supplier ---</option>
                  @foreach ($suppliers as $supplier)
                  <option value="{{ $supplier->id }}">{{ $supplier->nama }}</option>
                  @endforeach
                </select>
                @error('supplier_id')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <label for="">Daftar Barang Pembelian</label>
              </div>
              <div class="card-body">
                <table class="table table-bordered table-md tb bg-light table-striped text-center table-hover" id="table">
                  <thead>
                    <tr>
                      <th scope="col">Barang</th>
                      <th scope="col">Jumlah</th>
                      <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr id="item0">
                      <td class="align-middle">
                        <select class="form-control form-control-sm item" name="item_id[]">
                          <option value="">--- Pilih Barang ---</option>
                          @foreach ($items as $item)
                          <option data-harga="{{ $item->harga_beli }}" value="{{ $item->id }}">{{ $item->nama.' @'.$item->harga_beli.' /'.$item->unit->nama }}</option>
                          @endforeach
                        </select>
                      </td>
                      <td class="align-middle">
                        <input type="number" class="form-control form-control-sm jumlah @error('jumlah') is-invalid @enderror" name="jumlah[]" placeholder="1" disabled>
                      </td>
                      <td class="align-middle">
                        <input type="number" class="form-control form-control-sm total">
                      </td>
                    </tr>
                    <tr id="item1"></tr>
                  </tbody>
                </table>
              </div>
              <div class="card-footer">
                <button id="add_row" class="btn btn-primary float-left btn-xs">+ Tambah Baris</button>
                <button id='delete_row' class="float-right btn btn-danger btn-xs">- Hapus Baris</button>
              </div>
            </div>
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