@extends('layouts/main')

@section('title', 'Tambah Pegawai')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item"><a href="#">Data Pengguna</a></li>
<li class="breadcrumb-item"><a href="#">Tambah Pegawai</a></li>
@endsection

@section('content')
<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tambah Pegawai</h3>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ url('/employees') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="nama">Nama</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                  </div>
                <input type="text" class="form-control form-control-sm @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ old('nama') }}">
                  @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                      </div>
                      <input type="text" class="form-control form-control-sm @error('username') is-invalid @enderror" id="username" name="username" placeholder="Sunlight 50 gr" value="{{ old('username') }}">
                      @error('username')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                      </div>
                      <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" id="email" name="email" placeholder="Sunlight 50 gr" value="{{ old('email') }}">
                      @error('email')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                      </div>
                    <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan Password">
                      @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="password-confirm">Confirm Password</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                      </div>
                    <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" id="password-confirm" name="password_confirmation" placeholder="Masukkan Password">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="role">Hak Akses</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                  </div>
                <input type="text" class="form-control form-control-sm @error('role') is-invalid @enderror" id="role" name="role" placeholder="Sunlight 50 gr" value="{{ old('role') }}">
                  @error('role')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="phone">Nomor Telepon</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                      </div>
                      <input type="text" class="form-control form-control-sm @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Masukkan Nomor Telepon" value="{{ old('phone') }}">
                      @error('phone')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                      </div>
                      <input type="text" class="form-control form-control-sm @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Masukkan Nomor Telepon" value="{{ old('alamat') }}">
                      @error('alamat')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-md btn-primary float-right">Tambah Pegawai</button>
              <a href="{{ url('/users') }}" class="btn btn-md btn-secondary">Kembali</a>
            </div>
          </form>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
      </div>
  </div>
</div>
</section>
<!-- /.content -->
@endsection