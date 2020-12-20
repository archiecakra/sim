<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/css/fa.all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/sim.css') }}">
    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/datatables.min.css') }}">
    <!-- select2 BS4 -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/select2-bootstrap4.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="{{ url('/css/googlefont.css') }}" rel="stylesheet">
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
  <!-- Site wrapper -->
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
        
        <ul class="nav navbar-nav ml-auto">
          <a class="btn btn-danger btn-sm" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </ul>

        <!-- SEARCH FORM -->

        <!-- Right navbar links -->
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ url('/') }}" class="brand-link">
          <img src="{{ url('gambar/site_assets/site_logo.png') }}" alt="Mentari Logo" class="brand-image">
          <span class="brand-text font-weight-light">SIM Mentari</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ url('gambar/site_assets/user_pic.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link {{ (request()->is('*dashboard')) ? 'active' : ''}}">
                  <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-header text-center nav-header-top"><h6 class="bg-secondary nav-header-title">Manajemen Stok</h6></li>
              <li class="nav-item has-treeview {{ (request()->is('*items*') && request()->segment(2) != 'purchases' && request()->segment(2) != 'mutations') ? 'menu-open' : ''}}">
                <a href="#" class="nav-link {{ (request()->is('*items*') && request()->segment(2) != 'purchases' && request()->segment(2) != 'mutations') ? 'active' : ''}}">
                  <i class="nav-icon fas fa-box"></i>
                  <p>
                    Barang
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/items/create') }}" class="nav-link {{ request()->is('*items/create') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tambah Barang</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/items') }}" class="nav-link {{ request()->is('*items') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kelola Barang</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/items/categories') }}" class="nav-link {{ request()->is('*items/categories') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kelola Kategori</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/items/units') }}" class="nav-link {{ request()->is('*items/units') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kelola Satuan</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview {{ (request()->is('*purchases*')) ? 'menu-open' : ''}}">
                <a href="#" class="nav-link {{ (request()->is('*purchases*')) ? 'active' : ''}}">
                  <i class="nav-icon fas fa-gifts"></i>
                  <p>
                    Pembelian Barang
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/items/purchases/create') }}" class="nav-link {{ request()->is('*items/purchases/create') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tambah Pembelian</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/items/purchases') }}" class="nav-link {{ request()->is('*items/purchases') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kelola Pembelian</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview {{ (request()->is('*mutations*')) ? 'menu-open' : ''}}">
                <a href="{{ url('/items/mutations') }}" class="nav-link {{ (request()->is('*mutations*')) ? 'active' : ''}}">
                  <i class="nav-icon fas fa-history"></i>
                  <p>
                    Mutasi Stok
                  </p>
                </a>
              </li>
              <li class="nav-header text-center nav-header-top"><h6 class="bg-secondary nav-header-title">Penjualan</h6></li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-shopping-cart"></i>
                  <p>
                    Transaksi Penjualan
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                  <a href="{{ url('/transaction/sales') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tambah Transaksi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/transaction/purchase') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kelola Transaksi</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-header text-center nav-header-top"><h6 class="bg-secondary nav-header-title">Manajemen Relasi</h6></li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Pelanggan
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/items') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tambah Pelanggan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/suppliers') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kelola Pelanggan</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-people-carry"></i>
                  <p>
                    Supplier
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/suppliers/create') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tambah Supplier</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/suppliers') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kelola Supplier</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user-tie"></i>
                  <p>
                    Pegawai
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/items') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tambah Pegawai</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/suppliers') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kelola Pegawai</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-header text-center"><h6 class="bg-secondary nav-header-title">Original Menu</h6></li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-shopping-cart"></i>
                  <p>
                    Transaksi
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                  <a href="{{ url('/transaction/sales') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Transaksi Penjualan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/transaction/purchase') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Transaksi Pembelian</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th-list"></i>
                  <p>
                    Data
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/items') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Stok Barang</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/suppliers') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Supplier</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/users') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Pengguna</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-print"></i>
                  <p>
                    Laporan
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/laporan/penjualan') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Penjualan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/laporan/pembelian') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pembelian</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/laporan/gudang') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Gudang</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>@yield('title')</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  @yield('breadcrumb')
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        @yield('content')
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2020 Archie Cakra.</strong> All rights
        reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ url('/js/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ url('/js/bootstrap.bundle.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ url('/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ url('/js/adminlte.min.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ url('/js/demo.js') }}"></script>
  <!-- Select2 BS4 -->
  <script src="{{ url('/js/select2.full.min.js') }}"></script>
  <!-- datatables -->
  <script type="text/javascript" src="{{ url('/js/datatables.min.js') }}"></script>
  <!-- my custom script -->
  <script>
    $('.alert').delay(1000).fadeOut(1000);
    $('.card').hide();
    $('.card').fadeIn(1000);
    $(document).ready(function() {
      $('#datatable').DataTable();
    } );
    $('.select2').select2({
      theme: 'bootstrap4'
    });
    // function initSelect2() {
    //   $('select').select2({
    //     theme: 'bootstrap4'
    //   });
    // }
  </script>
  @yield('js')
  </body>
</html>
