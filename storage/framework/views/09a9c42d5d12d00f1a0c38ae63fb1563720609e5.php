<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(url('/css/fa.all.min.css')); ?>">
    <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(url('/css/OverlayScrollbars.min.css')); ?>">
    <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(url('/css/adminlte.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('/css/sim.css')); ?>">
    <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo e(url('/css/googlefont.css')); ?>" rel="stylesheet">
  
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
          <a class="btn btn-danger btn-sm" href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            <?php echo e(__('Logout')); ?>

          </a>

          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
            <?php echo csrf_field(); ?>
          </form>
        </ul>

        <!-- SEARCH FORM -->

        <!-- Right navbar links -->
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?php echo e(url('/')); ?>" class="brand-link">
          <img src="<?php echo e(url('gambar/site_assets/site_logo.png')); ?>" alt="Mentari Logo" class="brand-image">
          <span class="brand-text font-weight-light">SIM Mentari</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?php echo e(url('gambar/site_assets/user_pic.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block"><?php echo e(Auth::user()->name); ?></a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="<?php echo e(url('/')); ?>" class="nav-link">
                  <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-header text-center nav-header-top"><h6 class="bg-secondary nav-header-title">Manajemen Stok</h6></li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-box"></i>
                  <p>
                    Barang
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo e(url('/items/create')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tambah Barang</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('/items')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kelola Barang</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('/items/categories/')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kelola Kategori</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('/transaction/purchase')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kelola Satuan</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-gifts"></i>
                  <p>
                    Pembelian Barang
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo e(url('/transaction/sales')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tambah Pembelian</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('/transaction/purchase')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kelola Pembelian</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('/transaction/purchase')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kelola Kategori</p>
                    </a>
                  </li>
                </ul>
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
                  <a href="<?php echo e(url('/transaction/sales')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tambah Transaksi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('/transaction/purchase')); ?>" class="nav-link">
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
                    <a href="<?php echo e(url('/items')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tambah Pelanggan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('/suppliers')); ?>" class="nav-link">
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
                    <a href="<?php echo e(url('/items')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tambah Supplier</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('/suppliers')); ?>" class="nav-link">
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
                    <a href="<?php echo e(url('/items')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tambah Pegawai</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('/suppliers')); ?>" class="nav-link">
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
                  <a href="<?php echo e(url('/transaction/sales')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Transaksi Penjualan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('/transaction/purchase')); ?>" class="nav-link">
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
                    <a href="<?php echo e(url('/items')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Stok Barang</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('/suppliers')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Supplier</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('/users')); ?>" class="nav-link">
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
                    <a href="<?php echo e(url('/laporan/penjualan')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Penjualan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('/laporan/pembelian')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pembelian</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('/laporan/gudang')); ?>" class="nav-link">
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
                <h1><?php echo $__env->yieldContent('title'); ?></h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <?php echo $__env->yieldContent('breadcrumb'); ?>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <?php echo $__env->yieldContent('content'); ?>
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
  <script src="<?php echo e(url('/js/jquery.min.js')); ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo e(url('/js/bootstrap.bundle.min.js')); ?>"></script>
  <!-- overlayScrollbars -->
  <script src="<?php echo e(url('/js/jquery.overlayScrollbars.min.js')); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo e(url('/js/adminlte.min.js')); ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo e(url('/js/demo.js')); ?>"></script>
  <!-- my custom script -->
  <script>
    let row_number = 1;
    $("#add_row").click(function(e){
      e.preventDefault();
      let new_row_number = row_number - 1;
      $('#item' + row_number).html($('#item' + new_row_number).html()).find('td:first-child');
      $('#table').append('<tr id="item' + (row_number + 1) + '"></tr>');
      row_number++;
    });

    $("#delete_row").click(function(e){
      e.preventDefault();
      if(row_number > 1){
        $("#item" + (row_number - 1)).html('');
        row_number--;
      }
    });
  </script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\sim\resources\views/layouts/main.blade.php ENDPATH**/ ?>