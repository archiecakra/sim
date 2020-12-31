@extends('shop.layouts.main')

{{-- @section('title', 'Dashboard')

@section('breadcrumb')
<li class="breadcrumb-item">Dashboard</li>
@endsection --}}

@section('content')
<!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="col-12">
              <img src="{{ url($item->gambar) }}" class="product-image" alt="Product Image">
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <h3 class="my-3">{{ $item->nama }}</h3>

            <hr>
            <h4>Informasi Barang</h4>
            <table>
              <tr>
                <td>Stok</td>
                <td>:</td>
                <td id="stok">{{ $item->stok }}</td>
              </tr>
              <tr>
                <td>Satuan</td>
                <td>:</td>
                <td>{{ $item->unit->nama }}</td>
              </tr>
              <tr>
                <td>Harga</td>
                <td>:</td>
                <td id="harga">Rp. {{ $item->harga_jual }}</td>
              </tr>
            </table>

            <div class="bg-gray py-2 px-3 mt-4">
              {{-- <input type="number" class="form-control" placeholder="Masukkan Jumlah Barang"> --}}
              <div class="input-group mb-3">
                <input type="number" id="jumlah" placeholder="Masukkan Jumlah Barang" class="form-control">
                <div class="input-group-append">
                  <span class="input-group-text">{{ $item->unit->nama }}</span>
                </div>
              </div>
              <br>
              <h2 class="mb-0">
                Total
              </h2>
              <h4 class="mt-0">
                <small>Rp. 0</small>
              </h4>
            </div>

            <div class="mt-4 text-center">
              <div class="btn btn-primary btn-lg btn-flat">
                <i class="fas fa-cart-plus fa-lg mr-2"></i> 
                Masukkan Keranjang
              </div>
              
            </div>

          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
<!-- /.content -->
@endsection

@section('js')
  <script>
    $('input#jumlah').keyup(function () {
      if ($(this).val() > parseInt($('td#stok').text())) {
        $(this).val(0);
        $(this).tooltip({title: "Tidak Boleh Melebihi Stok", placement: "top"}).tooltip('show');
      }
      var total = parseInt(($('td#harga').text().replace(/[^0-9]/g, ''))*($(this).val()));
      $('h4.mt-0').text('Rp. '+total);
    });
  </script>
@endsection