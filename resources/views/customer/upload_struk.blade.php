@extends('customer.master')

@section('content')
    <div class="container">
      <div class="row">
        @if(!$pemesanan->sudah_dibayar)
        <div class="col-sm-4">
          <div class="aside animate-box">
            <h3><b>Form Konfirmasi Pembayaran</b><hr></h3>
            <form method="post" action="{{url('pelanggan/upload_struk/'.$id)}}" class="colorlib-form" style="margin: auto;" enctype="multipart/form-data">
              {{csrf_field()}}
              <input type="hidden" name="id_pemesanan" value="{{$id}}">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="nama_pelanggan">Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" id="nama_pelanggan" placeholder="Nama pelanggan / pemesan" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="alamat_penjemputan">Alamat Penjemputan</label>
                    <textarea name="alamat_penjemputan" id="alamat_penjemputan" placeholder="Alamat penjemputan" class="form-control" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="no_telp">No Telepon/HP</label>
                    <input type="text" name="no_telp" id="no_telp" placeholder="+628XXXXXXXXXX" maxlength="13" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="Foto">Bukti struk transfer</label>
                    <div class="form-field">
                      <input type="file" name="foto" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <input type="submit" name="submit" id="submit" value="Simpan" class="btn btn-primary btn-block">
                </div>
              </div>
            </form>
          </div>
        </div>
        @endif
        <div class="col-sm-8">
          <article class="animate-box">
            <h2>Detail Pemesanan <span class="badge badge-success">{{$pemesanan->status_pembayaran}}</span></h2>
            <hr>
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
              <b>Jumlah Penumpang:</b><br/>
              {{$pemesanan->jumlah_orang}}
            </p>
            <p>
              <b>Kota Tujuan:</b><br/>
              {{$pemesanan->kota->nama_kota}}
            </p>
            <p>
              <b>Tujuan Wisata:</b><br/>
              <ul>
                @foreach ($pemesanan->detail_pemesanan as $item)
                <li>{{$item->wisata->nama}}</li>
                @endforeach
              </ul>
            </p>
            <p>
              <b>Tanggal berangkat - Tanggal pulang:</b><br/>
              {{$pemesanan->tgl}} - {{$pemesanan->tgl2}} ({{$pemesanan->jumlah_hari}} hari)
            </p>
            <p>
              <b>Kendaraan:</b><br/>
              @if($pemesanan->bis != null)
              {{$pemesanan->bis->nama_po}}
              @else
              {{$pemesanan->mobil->nama_mobil}}
              @endif
            </p>
            <p>
              <b>Harga tota yang dibayarkan:</b><br/>
              Rp. {{number_format($pemesanan->harga_total(), 2, ',', '.')}} (untuk {{$pemesanan->jumlah_hari}} hari)
            </p>
            <p>
              <a @if($pemesanan->sudah_dibayar) href="/struk/{{$id}}" @endif class="btn btn-primary @if(!$pemesanan->sudah_dibayar) disabled @endif" target="_blank">Cetak bukti pembayaran</a><br/>
              @if(!$pemesanan->sudah_dibayar)
              <span>*Tombol cetak akan aktif ketika pembayaran sudah dikonfirmasi operator kami</span>
              @endif
            </p>
          </article>
        </div>
      </div>
    </div>
@stop