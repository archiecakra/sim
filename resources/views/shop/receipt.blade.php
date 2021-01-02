<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ url('/css/sim.css') }}">
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col text-center">
        <img src="{{ url('gambar/site_assets/site_logo.png') }}" alt="Mentari Logo" class="img-fluid" style="max-width: 70%;">
        <ul class="list-unstyled">
          <li class="font-weight-bold">Toko Mentari Grosir</li>
          <li>Pasar Paing Stand No. 16</li>
          <li>Jl. Zamhuri No. 31, Rungkut Kidul</li>
        </ul>
        <table class="text-left text-sm">
          <tr>
            <td>Nama Pelanggan</td>
            <td>:</td>
            <td>{{ $order->user->name }}</td>
          </tr>
          <tr>
            <td>Kode Transaksi</td>
            <td>:</td>
            <td>{{ $order->kode_transaksi }}</td>
          </tr>
          <tr>
            <td>Status</td>
            <td>:</td>
            <td>{{ $order->status }}</td>
          </tr>
        </table>
        <table class="table table-sm">
          <thead>
              <tr>
                  <th class="quantity">Qty</th>
                  <th class="quantity">Satuan</th>
                  <th class="description">Barang</th>
                  <th class="price">Rp.</th>
              </tr>
          </thead>
          <tbody class="text-sm">
            @foreach ($order->items as $item)    
            <tr>
              <td class="">{{ $item->pivot->jumlah }}</td>
              <td class="">{{ $item->unit->nama }}</td>
              <td class="">{{ $item->nama }}</td>
              <td class="">{{ $item->harga_jual*$item->pivot->jumlah }}</td>
            </tr>
            @endforeach
            <tr>
              <td colspan="3">TOTAL BELANJA</td>
              <td class="">Rp. {{ $order->total_bayar }}</td>
            </tr>
          </tbody>
        </table>
        <p class="centered">
          Terimakasih Atas Pembelian Anda
          <br>Tunjukkan Struk Ini Pada Saat Membayar
        </p>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="{{ url('/js/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ url('/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
