

<?php $__env->startSection('title', 'Data Supplier'); ?>

<?php $__env->startSection('breadcrumb'); ?>
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item"><a href="#">Data Supplier</a></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
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
            <h3 class="card-title">Daftar Supplier</h3>
            <a href="<?php echo e(url('/suppliers/create')); ?>" class="btn btn-primary float-right text-white">Tambah Supplier</a>
          </div>
          <div class="card-body">
            <div class="col-7">
              <div class="list-group">
                <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                <a href="<?php echo e(url('/suppliers/'.$supplier->id.'/edit')); ?>" class="list-group-item list-group-item-action list-group-item-light font-weight-light"><?php echo e($supplier->nama); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
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
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sim\resources\views/relasi/supplier/supplier_index.blade.php ENDPATH**/ ?>