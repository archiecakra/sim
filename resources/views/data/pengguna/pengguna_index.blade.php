@extends('layouts/main')

@section('title', 'Data Pengguna Aplikasi')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item"><a href="#">Data Pengguna Aplikasi</a></li>
@endsection

@section('content')
<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        @if (session('message'))
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>{{ session('message') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <!-- Default box -->
        <div class="card collapsed-card">
          <div class="card-header">
            <h3 class="card-title" data-card-widget="collapse" data-toggle="tooltip" title="Click to Open"><a href="#"><u>Data Pegawai</u></a></h3>

            <a href="{{ url('/employees/create') }}" class="btn btn-primary float-right text-white">Tambah Pegawai</a>
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
                @foreach ($users as $user)
                <tr>
                  <td scope="row" class="align-middle">{{ $loop->iteration }}</td>
                  <td class="align-middle">{{ $user->name }}</td>
                  <td class="align-middle">{{ $user->username }}</td>
                  <td class="align-middle">{{ $user->email }}</td>
                  <td class="align-middle">Admin</td>
                  <td class="align-middle">
                    <a class="btn btn-primary btn-xs" href=""><i class="fas fa-md fa-edit"></i></a>
                    <form action="" method="POST">
                      <button class="btn btn-danger btn-xs"><i class="fas fa-md fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
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

            <a href="{{ url('/items/create') }}" class="btn btn-primary float-right text-white">Tambah Customer</a>
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
@endsection