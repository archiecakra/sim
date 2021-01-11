@extends('layouts/main')

@section('title', 'Transaksi Penjualan Barang')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item">Transaksi Penjualan</a></li>
@endsection

@section('content')
<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        @if (session('message'))
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>{{ session('message') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <!-- Default box -->
        <div class="row">
          <div class="col-6">
            <div class="card">
              <div class="card-body">
                <canvas id="monthly-sales"></canvas>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card">
              <div class="card-body">
                <canvas id="monthly-sales-nominal"></canvas>
              </div>
            </div>
          </div>
        </div>
        <!-- Default box -->
        <!-- Default box -->
        <div class="card">
          <div class="card-body">
            <div class="form-row align-items-center">
              <div class="form-group col-md-4">
                <label for="user_id">Pelanggan</label>
                <form style="all: unset;" action="{{ url('/reports/sale') }}" method="POST">
                  @csrf
                  <select name="user_id" class="form-control select2" name="user_id" id="user_id">
                    <option value="">Semua Pelanggan</option>
                    @foreach ($users as $user)
                      <option value="{{ $user->id }}" @if ($request->user_id == $user->id) selected @endif>{{ $user->name }}</option> 
                    @endforeach
                  </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="jenis">Jenis Laporan</label>
                    <select name="jenis" class="form-control" id="jenis">
                      <option value="">Pilih Jenis Laporan</option>
                      <option value="Harian" @if ($request->jenis=="Harian") selected @endif>Harian</option>
                      <option value="Bulanan" @if ($request->jenis=="Bulanan") selected @endif>Bulanan</option>
                      <option value="Tahunan" @if ($request->jenis=="Tahunan") selected @endif>Tahunan</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="tanggal">Pilih Tanggal/Bulan/Tahun</label>
                    <input value="{{ $request->tanggal }}" type="text" name="tanggal" class="form-control datetimepicker-input" id="tanggal" data-toggle="datetimepicker" data-target="#tanggal" autocomplete="off" disabled>
                  </div>
                  <div class="col-md-2" style="margin-top: 15px;">
                    <div class="btn-group" role="group">
                      <button type="submit" class="btn btn-primary btn-md">Filter</button>
                </form>
                      <form id="print" action="{{ url('/reports/sale/print') }}" method="POST">
                        @csrf
                        <input type="hidden" id="user_print" name="user_id" value="">
                        <input type="hidden" id="jenis_print" name="jenis" value="">
                        <input type="hidden" id="tanggal_print" name="tanggal" value="">
                        <button type="submit" class="btn btn-success btn-md">Print</button>
                      </form>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- Default box -->
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Transaksi Penjualan</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive-md">
              <table id="datatable" class="table table-sm bg-light table-bordered table-striped text-center table-hover">
                <thead>
                  <tr>
                    <th class="align-middle" scope="col">Tanggal Penjualan</th>
                    <th class="align-middle" scope="col">Kode Transaksi</th>
                    <th class="align-middle" scope="col">Pelanggan</th>
                    <th class="align-middle" scope="col">Transaksi</th>
                    <th class="align-middle" scope="col">Total Penjualan</th>
                    <th class="align-middle" scope="col">Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($sales as $sale)
                    <tr>
                      <td class="align-middle" scope="row">{{ $sale->created_at->format('j F Y') }}</td>
                      <td class="align-middle">{{ $sale->kode_transaksi }}</td>
                      <td class="align-middle text-left">{{ $sale->user->name }}</td>
                      <td class="align-middle text-left">
                        <ul class="product-list">
                          @foreach ($sale->items as $item)
                            <li>{{ $item->nama.' @Rp.'.$item->harga_beli.' x '.$item->pivot->jumlah.' '.$item->unit->nama }}</li>
                          @endforeach
                        </ul>
                      </td>
                      <td class="align-middle text-nowrap">{{ 'Rp. '.number_format($sale->total_bayar, 2).' ,-' }}</td>
                      <td class="align-middle text-left">{{ $sale->keterangan }}</td>
                    </tr>
                  @endforeach
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
@endsection

@section('js')
  <script>
    var ctx = $('#monthly-sales');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: @json($chart->labels),
        datasets: [
          {
            label: 'Jumlah Penjualan Perbulan',
            data: @json($chart->datasets),
            backgroundColor: 'rgba(39, 10, 228, 0.9)',
            borderWidth: 1
          }
        ]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true,
              stepSize: 1,
              suggestedMax: 10
            }
          }]
        }
      }
    });

    var ctx2 = $('#monthly-sales-nominal');
    var myChart2 = new Chart(ctx2, {
      type: 'bar',
      data: {
        labels: @json($chart->labels2),
        datasets: [
          {
            label: 'Jumlah Nominal Penjualan Perbulan (Rp.)',
            data: @json($chart->datasets2),
            backgroundColor: 'rgba(103, 230, 30, 0.9)',
            borderWidth: 1
          }
        ]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true,
              stepSize: 100000,
              suggestedMax: 1500000
            }
          }]
        }
      }
    });

    $('form#print').submit(function () {
      var user_id = $('select#user_id option:selected').val();
      var jenis = $('#jenis option:selected').val();
      var tanggal = $('input#tanggal').val();
      $('input#user_print').val(user_id);
      $('input#jenis_print').val(jenis);
      $('input#tanggal_print').val(tanggal);
    });

    $('select#jenis').change(function () {
      var selected = $('#jenis option:selected').val();
      $('#tanggal').datetimepicker('destroy');
      $('#tanggal').val('');
      // alert(selected);
      switch (selected) {
        case 'Harian':
          $('#tanggal').prop('disabled', false);
          $('#tanggal').datetimepicker({
            format: "YYYY-MM-DD",
            useCurrent: false
          });
          break;

        case 'Bulanan':
          $('#tanggal').prop('disabled', false);
          $('#tanggal').datetimepicker({
            format: "M",
            viewMode: "months",
            useCurrent: false
          });
          break

        case 'Tahunan':
          $('#tanggal').prop('disabled', false);
          $('#tanggal').datetimepicker({
            format: "YYYY",
            viewMode: "years",
            useCurrent: false
          });
          break
      
        default:
          break;
      }
    });
  </script>
@endsection