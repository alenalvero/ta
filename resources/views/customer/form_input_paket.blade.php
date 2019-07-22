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
			<form action="{{url('customer_PaketTour')}}" method="post">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<article class="animate-box">
							<div class="blog-img" style="background: url('{{asset('images/'.$paket_tour->foto)}}'); background-size:cover"></div>
							<div class="desc">
									<h3>{{$paket_tour->nama_tour}}</h3>
									<p>{!! $paket_tour->keterangan !!}</p> 
							</div>
						</article>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="aside animate-box">
							<h3><b>Form Reservasi</b></h3>
							<div class="label label-info" style="font-size: 14pt">
									Tempat Tersedia: {{$paket_tour->kuota-$konfirmed}}
								</div>
								<hr>
							<form method="post" action="{{url('customer_PaketTour')}}" class="colorlib-form">
								{{csrf_field()}}
								<div class="row">
									<div class="col-md-12">
										<div class="form-field">
											<input type="hidden" name="id_user" id="date" class="form-control" value="{{Auth::user()->id}}">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="kode_promo">Kode Promo</label>
											<div class="form-field">
												<input type="text" name="kode_promo" class="form-control" >
												@if(session()->has('promo_invalid'))
												<p style="color: red">{{session()->get('promo_invalid')}}</p>
												@endif
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="nama">Nama Lengkap</label>
											<div class="form-field">
												<input type="text" name="nama_pelanggan_paket" class="form-control" value="{{old('nama_pelanggan_paket')}}">
											</div>
										</div>
									</div>
									<input type="hidden" name="id_paket" value="{{ $paket_tour->id}}" class="form-control" >
									<div class="col-md-12">
										<div class="form-group">
											<label for="alamat">Alamat</label>
											<div class="form-field">
												<input type="text" name="alamat" class="form-control" value="{{old('alamat')}}">
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="no_telp">Nomer Telfon</label>
											<div class="form-field">
												<input type="text" name="no_telp" class="form-control" value="{{old('no_telp')}}">
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="jumlah_orang">Jumlah orang</label>
											<div class="form-field">
												<input type="number" name="jumlah_orang" id="jumlah_orang" class="form-control" placeholder="Jumlah orang" required value="{{old('jumlah_orang')}}">
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
@stop

@section('script')
	<script>
		// var datesForDisable = ["7/4/2019", "7/9/2019", "7/15/2019"];
		$('#tgl').datepicker({
				format: 'm/d/yyyy',
				autoclose: true,
				startDate: new Date(),
				// datesDisabled: ['6/20/2019'],
		});
	</script>
@endsection