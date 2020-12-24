

<?php $__env->startSection('title', 'Data Penjualan'); ?>

<?php $__env->startSection('breadcrumb'); ?>
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item"><a href="#">Penjualan</a></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md">
        <?php if(session('message')): ?>
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong><?php echo e(session('message')); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif; ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Penjualan</h3>
            <a href="<?php echo e(url('/sales/create')); ?>" class="btn btn-primary float-right text-white">Tambah Penjualan</a>
          </div>
          <div class="card-body">
            <div class="table-responsive-md">
              <table id="datatable" class="table table-sm bg-light table-striped text-center table-hover">
                <thead class="thead-light">
                  <tr>
                    <th class="align-middle" scope="col">Tanggal Penjualan</th>
                    <th class="align-middle" scope="col">Kode Transaksi</th>
                    <th class="align-middle" scope="col">Customer</th>
                    <th class="align-middle" scope="col">Transaksi</th>
                    <th class="align-middle" scope="col">Total Bayar</th>
                    <th class="align-middle" scope="col">Status</th>
                    <th class="align-middle" scope="col">Keterangan</th>
                    <th class="align-middle" scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="align-middle" scope="row"><?php echo e($sale->created_at); ?></td>
                      <td class="align-middle"><?php echo e($sale->kode_transaksi); ?></td>
                      <td class="align-middle"><?php echo e($sale->user->name); ?></td>
                      <td class="align-middle text-left">
                        <ul>
                          <?php $__currentLoopData = $sale->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($item->nama.' @Rp.'.$item->harga_beli.' x '.$item->pivot->jumlah.' '.$item->unit->nama); ?></li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                      </td>
                      <td class="align-middle"><?php echo e('Rp. '.$sale->total_bayar.',-'); ?></td>
                      <td class="align-middle"><?php echo e($sale->status); ?></td>
                      <td class="align-middle"><?php echo e($sale->keterangan); ?></td>
                      <td class="align-middle">
                        <a href="<?php echo e(url('/sales/'.$sale->id.'/edit')); ?>" class="btn btn-warning btn-sm"><i class="nav-icon fas fa-pen"></i></a>
                        <form style="all: unset;" action="<?php echo e(url('/sales/'.$sale->id)); ?>" method="POST">
                          <?php echo method_field('delete'); ?>
                          <?php echo csrf_field(); ?>
                          <button class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sim\resources\views/penjualan/penjualan_index.blade.php ENDPATH**/ ?>