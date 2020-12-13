

<?php $__env->startSection('title', 'Data Pengguna Aplikasi'); ?>

<?php $__env->startSection('breadcrumb'); ?>
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item"><a href="#">Data Pengguna Aplikasi</a></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <?php if(session('message')): ?>
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong><?php echo e(session('message')); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif; ?>
        <!-- Default box -->
        <div class="card collapsed-card">
          <div class="card-header">
            <h3 class="card-title" data-card-widget="collapse" data-toggle="tooltip" title="Click to Open"><a href="#"><u>Data Pegawai</u></a></h3>

            <a href="<?php echo e(url('/employees/create')); ?>" class="btn btn-primary float-right text-white">Tambah Pegawai</a>
          </div>
          <div class="card-body">
            <table class="table table-sm table-striped text-center table-hover">
              <thead class="thead-light">
                <tr>
                  <th class="align-middle" scope="col">#</th>
                  <th class="align-middle" scope="col">Nama</th>
                  <th class="align-middle" scope="col">Username</th>
                  <th class="align-middle" scope="col">Email</th>
                  <th class="align-middle" scope="col">role</th>
                  <th class="align-middle" scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td scope="row" class="align-middle"><?php echo e($loop->iteration); ?></td>
                  <td class="align-middle"><?php echo e($user->name); ?></td>
                  <td class="align-middle"><?php echo e($user->username); ?></td>
                  <td class="align-middle"><?php echo e($user->email); ?></td>
                  <td class="align-middle">Admin</td>
                  <td class="align-middle">
                    <a class="btn btn-primary btn-xs" href=""><i class="fas fa-md fa-edit"></i></a>
                    <form action="" method="POST">
                      <button class="btn btn-danger btn-xs"><i class="fas fa-md fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        <!-- Default box -->
        <div class="card collapsed-card">
          <div class="card-header" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <h3 class="card-title" data-card-widget="collapse" data-toggle="tooltip" title="Click to Open"><a href="#"><u>Data Customer</u></a></h3>

            <a href="<?php echo e(url('/items/create')); ?>" class="btn btn-primary float-right text-white">Tambah Customer</a>
          </div>
          <div class="card-body">
            <table class="table table-sm table-striped text-center table-hover">
              <thead class="thead-light">
                <tr>
                  <th class="align-middle" scope="col">#</th>
                  <th class="align-middle" scope="col">Nama</th>
                  <th class="align-middle" scope="col">Username</th>
                  <th class="align-middle" scope="col">Email</th>
                  <th class="align-middle" scope="col">role</th>
                  <th class="align-middle" scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row" class="align-middle">1</td>
                  <td class="align-middle">Archie Cakra</td>
                  <td class="align-middle">archiecakra</td>
                  <td class="align-middle">archiecakra1@gmail</td>
                  <td class="align-middle">Admin</td>
                  <td class="align-middle">
                    <a class="btn btn-primary btn-xs" href=""><i class="fas fa-md fa-edit"></i></a>
                    <form action="" method="POST">
                      <button class="btn btn-danger btn-xs"><i class="fas fa-md fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
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
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sim\resources\views/data/pengguna/pengguna_index.blade.php ENDPATH**/ ?>