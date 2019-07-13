@extends('customer.master')
@section('css')
<style type="text/css">hr {
display: block;
margin-top: 0.5em;
margin-bottom: 0.5em;
margin-left: auto;
margin-right: auto;
border-width: 5px;
}
/*hr{  
  
    border:         none;
    border-left:    1px solid hsla(200, 10%, 50%,100);
    height:         100vh;
    width:          1px;       
}*/</style>
@stop

@section('content')
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url('{{asset('images/img_bg_5.jpg')}}');">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
									<div class="slider-text-inner slider-text-inner2 text-center">
										<h1>Form Reservasi</h1>
									</div>
								</div>
							</div>
						</div>
					</li>
					</ul>
				</div>
		</aside>

		<div id="colorlib-blog">
			<div class="container">
				<form action="{{url('profile/konfirmasi_pembayaran')}}" method="post">
					<div class="row">
						<div class="col-md-7 col-md-push-5">
							<article class="animate-box">
								<div class="col-md-12">
									<h2>{{$pemesanan_paket_tour->paket_tour->nama_tour}}</h2>
									<img src="{{url('images/'.$pemesanan_paket_tour->paket_tour->foto)}}"/>
									<p>
										<b>Deskripsi</b><br/>
										{!!$pemesanan_paket_tour->paket_tour->keterangan!!}
									</p>
								</div>
								<div class="col-md-6">
									<p>
										<b>Nama Pelanggan</b><br/>
										{{$pemesanan_paket_tour->nama_pelanggan_paket}}
									</p>
									<p>
										<b>No. Telfon</b><br/>
										{{$pemesanan_paket_tour->no_telp}}
									</p>
									<p>
										<b>Alamat</b><br/>
										{{$pemesanan_paket_tour->alamat}}
									</p>
								</div>
								<div class="col-md-6">
									<p>
										<b>Harga </b><br/>
										{{$pemesanan_paket_tour->paket_tour->harga}}
									</p>
									<p>
										<b>Tanggal Berangkat</b><br/>
										{{$pemesanan_paket_tour->tgl}}
									</p>
									<div class="alert alert-info" role="alert">
										<p>
											<b>Total</b><br/>
											(harga) - (diskon) <br/>
											Rp. {{number_format($pemesanan_paket_tour->paket_tour->harga, 2, ',', '.')}} - Rp. {{number_format($pemesanan_paket_tour->diskon, 2, ',', '.')}}<br/>
											<b>Total bayar:</b> Rp. {{number_format($pemesanan_paket_tour->paket_tour->harga - $pemesanan_paket_tour->diskon, 2, ',', '.')}}
										</p>
									</div>
								</div>
							</article>
						</div>

						<div class="col-md-4 col-md-pull-7">
							<div class="aside animate-box">
								<h3><b>Form Konfirmasi Pembayaran Paket</b><hr></h3>
							<form method="post" action="{{url('profile/konfirmasi_pembayaran')}}" class="colorlib-form">
										{{csrf_field()}}
										<div class="row">
										<div class="col-md-12">
											<input type="hidden" name="id_pemesanan_paket" value="{{$pemesanan_paket_tour->id}}" id="date" class="form-control">
											</div>
										<div class="col-md-12">
											<div class="form-group">
												<label for="Foto">Foto</label>
												<div class="form-field">
													<input type="file" name="foto" >
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
					</div>
				</form>
			</div>
		</div>
		</div>
@stop