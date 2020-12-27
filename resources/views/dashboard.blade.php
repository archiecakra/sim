@extends('layouts/main')

@section('title', 'Dashboard')

@section('breadcrumb')
<li class="breadcrumb-item">Dashboard</li>
@endsection

@section('content')
<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>150</h3>

            <p>Penjualan</p>
          </div>
          <div class="icon">
            <i class="fas fa-shopping-cart"></i>
          </div>
          <a href="#" class="small-box-footer">
            Lebih lanjut <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>20</h3>

            <p>Pembelian</p>
          </div>
          <div class="icon">
            <i class="fas fa-gifts"></i>
          </div>
          <a href="#" class="small-box-footer">
            Lebih lanjut <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>44</h3>

            <p>Barang</p>
          </div>
          <div class="icon">
            <i class="fas fa-box"></i>
          </div>
          <a href="#" class="small-box-footer">
            Lebih lanjut <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>65</h3>

            <p>Pelanggan</p>
          </div>
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
          <a href="#" class="small-box-footer">
            Lebih lanjut <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title">Penjualan Terakhir</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table" id="datatable">
              <thead>
              <tr>
                <th>Tanggal</th>
                <th>Kode Transaksi</th>
                <th>Status</th>
                <th>Total</th>
              </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
            {{-- <div class="table-responsive">
            </div> --}}
            <!-- /.table-responsive -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
          </div>
          <!-- /.card-footer -->
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Mutasi Barang</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <ul class="products-list product-list-in-card pl-2 pr-2">
              <li class="item">
                <div class="">
                  <a href="javascript:void(0)" class="product-title">Samsung TV
                    <span class="btn btn-danger btn-md float-right">-10</span></a>
                  <span class="product-description">
                    2020-12-24 10:36:23
                  </span>
                </div>
              </li>
              <li class="item">
                <div class="">
                  <a href="javascript:void(0)" class="product-title">Samsung TV
                    <span class="btn btn-success btn-md float-right">+20</span></a>
                  <span class="product-description">
                    2020-12-24 10:36:23
                  </span>
                </div>
              </li>
              <li class="item">
                <div class="">
                  <a href="javascript:void(0)" class="product-title">Samsung TV
                    <span class="btn btn-danger btn-md float-right">-10</span></a>
                  <span class="product-description">
                    2020-12-24 10:36:23
                  </span>
                </div>
              </li>
              
              <!-- /.item -->
            </ul>
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-center">
            <a href="javascript:void(0)" class="uppercase">View All Products</a>
          </div>
          <!-- /.card-footer -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
@endsection