@extends('shop.layouts.main')

{{-- @section('title', 'Dashboard') --}}

{{-- @section('breadcrumb')
<li class="breadcrumb-item">Dashboard</li>
@endsection --}}

@section('sidebar')
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
      <li class="nav-header">Filter</li>
      <select name="" class="form-control form-control-sm select2" id="">
        <option value="">Pilih Kategori</option>
        @foreach ($categories as $category)
          <option value="">{{ $category->nama }}</option>
        @endforeach
      </select>
    </ul>
  </nav>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row text-sm">
                {{-- @foreach ($items as $item)
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                        <span class="info-box-icon bg-info"><img src="{{ url('/gambar/Buku Tulis Sidu 58 Lembar.jpeg') }}" alt="..." class="img-thumbnail"></span>
            
                        <div class="info-box-content">
                            <span class="info-box-text font-weight-bold">{{ $item->nama }}</span>
                            <span class="info-box-text">Rp. {{ $item->harga_jual }} / {{ $item->unit->nama }}</span>
                            <a href="{{ url('/shop/'.$item->id) }}" class="btn btn-primary btn-xs">Lihat Produk</a>
                        </div>
                        <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>    
                @endforeach --}}
              @foreach ($items as $item)
                <div class="col-6">
                  <div class="card">
    
                    <!-- Card image -->
                    <img class="card-img-top" src="{{ url('/gambar/Buku Tulis Sidu 58 Lembar.jpeg') }}" alt="Produk">
                    {{-- <img class="card-img-top" src="https://via.placeholder.com/150?text={{ $item->nama }}" alt="Produk"> --}}
                  
                    <!-- Card content -->
                    <div class="card-body">
                  
                      <!-- Title -->
                      <h6 class="card-title">{{ $item->nama }}</h6><br>
                      <!-- Text -->
                      <span class="info-box-text">Rp. {{ number_format($item->harga_jual, 2) }} / {{ $item->unit->nama }}</span>
                      <!-- Button -->
                    </div>
                    <a href="{{ url('/shop/'.$item->id) }}" class="btn btn-primary btn-block rounded-0">Lihat barang</a>
                  
                  </div>
                </div>
              @endforeach
            </div>
        </div>
    </section>
@endsection