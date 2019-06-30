<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Struk Bukti Pembayaran</title>
  <style>
  .group {
    text-align: left;
  }
  .number-td {
    text-align: right;
  }
  </style>
</head>
<body>
  <table>
    <tr>
      <td><h3>Struk Pembayaran Warok Tour and Guide</h3></td>
    </tr>
  </table>
  <hr>
  <div class="col-sm-8">
    <article class="animate-box">
      <h2>Detail Pemesanan <span class="badge badge-success">{{$pemesanan->status_pembayaran}}</span></h2>
      <p>
        <b>Nama Pemesan:</b><br/>
        {{$pemesanan->nama_pelanggan}}
      </p>
      <p>
        <b>Alamat Penjemputan:</b><br/>
        {{$pemesanan->alamat}}
      </p>
      <p>
        <b>No Telp:</b><br/>
        {{$pemesanan->no_telp}}
      </p>
      <p>
        <b>Tanggal berangkat - Tanggal pulang:</b><br/>
        {{$pemesanan->tgl}} - {{$pemesanan->tgl2}} ({{$pemesanan->jumlah_hari}} hari)
      </p>
      <p>
        <b>Kendaraan:</b><br/>
        {{$pemesanan->bis->nama_po}}
      </p>
      <p>
        <b>Jumlah Penumpang:</b><br/>
        {{$pemesanan->jumlah_orang}}
      </p>
      <table border="1" width="100%">
        <tr>
          <th colspan="2" class="group">Kota Tujuan</th>
        </tr>
        <tr>
          <td>{{$pemesanan->kota->nama_kota}}</td>
          <td class="number-td">{{$pemesanan->kota->harga}}</td>
        </tr>
        <tr>
          <th colspan="2" class="group">Tujuan Wisata</th>
        </tr>
        @foreach ($pemesanan->detail_pemesanan as $item)
        <tr>
          <td>{{$item->wisata->nama}}</td>
          <td class="number-td">{{$item->wisata->harga}}</td>
        </tr>
        @endforeach
        <tr>
          <th class="group">Transportasi</th>
          <td class="number-td">Rp. {{number_format($pemesanan->harga_total_kendaraan(), 2, ',', '.')}}</td>
        </tr>
        <tr>
          <th class="group">Total yang di bayarkan</th>
          <td class="number-td">Rp. {{number_format($pemesanan->harga_total(), 2, ',', '.')}}</td>
        </tr>
      </table>
    </article>
  </div>
</body>
</html>