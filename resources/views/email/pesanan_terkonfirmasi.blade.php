<h2>Selamat pesanan anda telah terkonfirmasi</h2>
<p>
  Pemesanan dengan nama akun {{$nama}}, dengan email {{$email}} telah terkonfirmasi. Pesanan dengan tujuan kota {{$kota}} dan tujuan wisata sebagai berikut:
  <ul>
    @foreach ($tujuan as $item)
    <li>{{$item->wisata->nama}}</li>
    @endforeach
  </ul>
  Sekarang anda sudah dapat melanjutkan ke pembayaran, dengan mentransfer ke rekening Bank Cimb Niaga kami 704879737100 atas nama Randa Arinta Nugraha sejumlah Rp. {{number_format($harga,2,',','.')}}.
</p>