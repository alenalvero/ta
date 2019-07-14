<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rekap tahun {{$tahun_terpilih}}</title>
  <style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
  }
  </style>
</head>
<body>
  <table>
    <tr>
      <td><img src="{{public_path('images/logo.jpg')}}"></td>
      <td style="padding-left: 20px">
        <h1 style="margin: 0">Warok Tour</h1>
        Rekap Bulanan <b>Warok Tour and Travel</b> Tahun <b>{{$tahun_terpilih}}</b>
      </td>
    </tr>
  </table>
  <br/>
  @if(!$is_paket)
  <table border="1" cellspacing="0" cellpadding="3" width="100%">
    <thead>
      <tr>
        <th align="center">No</th>
        <th>Pelanggan</th>
        <th>Waktu Pesan</th>
        <th>Kota Tujuan</th>
        <th>Bayar</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data_rekap as $item)
      <tr>
        <td align="center">{{$loop->iteration}}</td>
        <td>{{$item->nama_pelanggan}}</td>
        <td align="right">{{$item->created_at->formatLocalized('%e %B %G')}}</td>
        <td>{{$item->kota->nama_kota}}</td>
        <td align="right">Rp. {{number_format($item->harga_total(), 2, ',', '.')}}</td>
        @php
        $total_rekap = $total_rekap + $item->harga_total();
        @endphp
      </tr>
      @endforeach
    </tbody>
    <tfoot>
      <tr>
        <th colspan="4">Total</th>
        <th align="right">Rp. {{number_format($total_rekap, 2, ',', '.')}}</th>
      </tr>
    </tfoot>
  </table>
  @else
  <table border="1" cellspacing="0" cellpadding="3" width="100%">
    <thead>
      <tr>
        <th align="center">No</th>
        <th>Pelanggan</th>
        <th>Waktu Pesan</th>
        <th>Paket</th>
        <th>Bayar</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data_rekap as $item)
      <tr>
        <td align="center">{{$loop->iteration}}</td>
        <td>{{$item->nama_pelanggan_paket}}</td>
        <td align="right">{{$item->created_at->formatLocalized('%e %B %G')}}</td>
        <td>{{$item->paket_tour->nama_tour}}</td>
        <td align="right">Rp. {{number_format($item->paket_tour->harga - $item->diskon, 2, ',', '.')}}</td>
        @php
        $total_rekap = $total_rekap + $item->paket_tour->harga - $item->diskon;
        @endphp
      </tr>
      @endforeach
    </tbody>
    <tfoot>
      <tr>
        <th colspan="4">Total</th>
        <th align="right">Rp. {{number_format($total_rekap, 2, ',', '.')}}</th>
      </tr>
    </tfoot>
  </table>
  @endif
</body>
</html>