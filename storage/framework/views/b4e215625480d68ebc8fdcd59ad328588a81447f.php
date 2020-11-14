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
    <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo e(url('/css/googlefont.css')); ?>" rel="stylesheet">
  </head>
  <body class="hold-transition sidebar-mini layout-fixed text-sm">
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
        
        <!-- SEARCH FORM -->

        <!-- Right navbar links -->
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../../index3.html" class="brand-link">
          <img src="../../dist/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Alexander Pierce</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="<?php echo e(url('/')); ?>" class="nav-link">
                  <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
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
                  <a href="<?php echo e(url('/transaksi/penjualan')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Transaksi Penjualan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('/transaksi/pembelian')); ?>" class="nav-link">
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
                    <a href="<?php echo e(url('/data/stok')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Stok Barang</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('/data/supplier')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Supplier</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('/data/customer')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Customer</p>
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
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\sim\resources\views/layout/main.blade.php ENDPATH**/ ?>