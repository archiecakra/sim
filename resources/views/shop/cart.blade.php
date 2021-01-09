@extends('shop.layouts.main')

@section('title', 'Keranjang Anda')

{{-- @section('breadcrumb')
<li class="breadcrumb-cart->item">Dashboard</li>
@endsection --}}

@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        @if (session('message'))
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>{{ session('message') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        {{-- <form id="cart" action=""> --}}
          @foreach ($carts as $cart)
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-info"><img src="{{ url('/img/items_img/'.$cart->item->gambar) }}" alt="..." class="img-thumbnail"></span>
    
                <div class="info-box-content">
                  <input type="hidden" name="item_id[]" value="{{ $cart->item->id }}">
                  <span class="info-box-text">{{ $cart->item->nama }}</span>
                  <span class="info-box-text">Rp. {{ $cart->item->harga_jual }} / {{ $cart->item->unit->nama }}</span>
                  <input type="hidden" name="jumlah[]" value="{{ $cart->jumlah }}">
                  <span class="info-box-number">Jumlah : {{ $cart->jumlah }}</span>
                  <a href="{{ url('/shop/'.$cart->item->id) }}" class="btn btn-danger btn-xs">Hapus barang</a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>    
          @endforeach
          <div class="col-md-12">
            <p class="float-right">Total Bayar : Rp. <span id="total_bayar">0</span></p>
            <button type="submit" id="checkout" class="btn btn-primary btn-block">Checkout</button>
          </div> 
        {{-- </form> --}}
      </div>
    </div>
  </section>
  <a id="back-to-top" href="{{ url('/shop') }}" class="btn btn-success back-to-top" role="button" aria-label="Scroll to top">
    <i class="fas fa-home"></i>
  </a>
@endsection

@section('js')
<script>
  var total = 0;
  $("input[name='jumlah[]']").each(function(){
    var harga = $(this).prev().text().replace(/[^0-9]/g, '');
    var sub_total = parseInt(this.value*harga);
    total = total+=sub_total;
    // alert(total);
    $('#total_bayar').text(total);
  });

  $("button#checkout").click( function () {
    var item_id = [];
    var jumlah = [];

    $("input[name='item_id[]']").each(function(){
      item_id.push(this.value);
    });
    $("input[name='jumlah[]']").each(function(){
      jumlah.push(this.value);
    });

    var total_bayar = parseInt($('#total_bayar').text());
    // alert('');
    $.ajax({
      type      : 'POST',
      url       : '{{ url("/cart") }}',
      dataType  : 'json',
      data      : {"_token": "{{ csrf_token() }}", item_id:item_id, jumlah:jumlah, total_bayar:total_bayar},
      success   : function () {
        window.location.href = '{{ url("/orders") }}';
      },
      error     : function () {
        console.log('error');
      }
    });
  });
</script>
@endsection