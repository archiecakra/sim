@extends('shop.layouts.main')

@section('title', 'Riwayat Pesanan')

{{-- @section('breadcrumb')
<li class="breadcrumb-item">Dashboard</li>
@endsection --}}

@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        @foreach ($orders as $order)
          <div class="col-md-3 col-sm-6 col-12">
            <div class="card collapsed-card">
              <div class="card-header" data-card-widget="collapse">
                <h3 class="card-title">( {{ $order->kode_transaksi }} ) Pesanan ke {{ $loop->remaining+1 }}</h3>
    
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  @foreach ($order->items as $item)
                    <li class="item">
                      <div class="">
                        <a href="javascript:void(0)" class="product-title">{{ $item->nama }}
                          <span class="btn btn-success btn-xs float-right">
                            <td>Rp. {{ $item->harga_jual*$item->pivot->jumlah }}</td>
                          </span>
                        </a>
                        <span class="product-description">
                          Jumlah : {{ $item->pivot->jumlah.' '.$item->unit->nama }} 
                        </span>
                      </div>
                    </li>
                  @endforeach
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <a href="{{ url('/orders/'.$order->id) }}" class="btn btn-sm btn-primary">Lihat Struk</a>
                <p class="float-right">Total Belanja : Rp. {{ $order->total_bayar }}</p>
              </div>
              <!-- /.card-footer -->
            </div>
          </div>    
        @endforeach
      </div>
    </div>
  </section>
  <a id="back-to-top" href="{{ url('/shop') }}" class="btn btn-success back-to-top" role="button" aria-label="Scroll to top">
    <i class="fas fa-home"></i>
  </a>
@endsection