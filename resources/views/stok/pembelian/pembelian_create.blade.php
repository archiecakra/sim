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
                <button id="add_row" class="btn btn-primary float-right btn-sm"><i class="fa fa-plus"></i></button>
                <button id='delete_row' class="float-right btn btn-danger btn-sm"><i class="fa fa-minus"></i></button>
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
                        <div class="input-group input-group-sm">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                          </div>
                          <input type="number" class="form-control form-control-sm total" placeholder="0" disabled>
                        </div>
                      </td>
                    </tr>
                    <tr id="item1"></tr>
                  </tbody>
                </table>
              </div>
              <div class="card-footer">
                <div id="grand-total" class="float-right">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Total Pembelian</span><span class="input-group-text">Rp. </span>
                    </div>
                    <input id="total_bayar" name="total_bayar" type="number" class="form-control" value="0" readonly>
                  </div>
                </div>
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

@section('js')
<script>
  var jumlah = '';
  var harga = '';
  let row_number = 1;
  
  $("#add_row").click(function(e){
    e.preventDefault();
    let new_row_number = row_number - 1;
    $('#item' + row_number).html($('#item' + new_row_number).html()).find('td:first-child');
    $('#table').append('<tr id="item' + (row_number + 1) + '"></tr>');
    row_number++;
    $('input.jumlah').eq(row_number-1).attr('disabled', true);
  });

  $("#delete_row").click(function(e){
    e.preventDefault();
    if(row_number > 1){
      $("#item" + (row_number - 1)).html('');
      row_number--;
    }
  });

  $(document).on('change', 'select.item', function(){
    let idx = $(this).index('select.item');
    window.harga = $(this).find(':selected').data('harga');
    $('.jumlah').eq(idx).removeAttr('disabled');
  });

  $(document).on('change', 'input.jumlah', function(){
    var sum = 0;
    let idx = $(this).index('input.jumlah');
    window.jumlah = $(this).val();
    $('.total').eq(idx).val(jumlah*harga);
    $('.total').each(function() {
        sum += 1*($(this).val());
    });
    $('#total_bayar').val(sum);
  });

</script>
@endsection