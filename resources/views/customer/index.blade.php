@extends('customer.master')
@section('css')
<style>
	.card-radio {
		background-color: white;
		color: #333333 !important;
		padding: 25px 20px;
		border-radius: 3px;
		text-align: center;
	}
	.line {
		height: 2px;
		width: 100%;
		display: block;
		background: white;
	}
</style>
@stop
@section('content')

<aside id="colorlib-hero">

	<div class="flexslider">
		<ul class="slides">
			<li style="background-image: url(images/borobudur.jpg); background-size:cover">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
							<div class="slider-text-inner text-center">
								<h2>Welcome to the Warok Tour</h2>
								<h1>Warok Tour And Travel</h1>
								<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a
										class="btn btn-primary btn-learn">Know More</a></p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li style="background-image: url(images/img_bg_1.jpg);">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
							<div class="slider-text-inner text-center">
								<h2>Discover &amp; Enjoy</h2>
								<h1>Everything you need in luxehotel</h1>
								<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a
										class="btn btn-primary btn-learn">Know More</a></p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li style="background-image: url(images/img_bg_3.jpg);">
				<div class="overlay"></div>
				<div class="container-fluids">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
							<div class="slider-text-inner text-center">
								<h2>You are invited</h2>
								<h1>We know how to please you</h1>
								<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a
										class="btn btn-primary btn-learn">Know More</a></p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li style="background-image: url(images/img_bg_4.jpg);">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
							<div class="slider-text-inner text-center">
								<h2>Come &amp; enjoy the unforgetable nights</h2>
								<h1>In the heart of luxehotel</h1>
								<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a
										class="btn btn-primary btn-learn">Know More</a></p>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</aside>
@if(Auth::check())
<div id="colorlib-reservation">
	<div class="container">
		<div class="row">
			<div class="col-md-12 search-wrap">
				<h1 style="color: white">Pemesanan</h1>
				<form method="post" class="colorlib-form" action="{{route('customer.create')}}">
					{{-- <form method="get" class="colorlib-form" action="{{route('pemesanan.langkah_lanjut')}}"> --}}
						{{ csrf_field() }}
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label for="date">Tanggal Berangkat</label>
								<div class="form-field">
									<i class="icon icon-calendar2"></i>
									<input name="tgl" type="text" id="date" class="form-control date" placeholder="Tanggal berangkat" required>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="date2">Tanggal Kembali</label>
								<div class="form-field">
									<i class="icon icon-calendar2"></i>
									<input name="tgl2" type="text" id="date2" class="form-control date" placeholder="Tanggal kembali" required>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="jumlah">Jumlah Orang</label>
								<div class="form-field">
									<i class="icon icon-user"></i>
									<input name="jumlah_orang" type="number" id="jumlah" class="form-control jumlah"
										placeholder="Jumlah Orang" required>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="id_kota">Tujuan</label>
								<div class="form-field">
									<i class="icon icon-arrow-down3"></i>
									<select name="id_kota" id="kota" class="form-control" required>
										<option value="" selected  style="color: black" disabled>Pilih satu kota tujuan</option>
										@foreach ($kotas as $item)
										<option value="{{ $item->id }}" style="color: black">{{$item->nama_kota}}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-12" style="display: none" id="tempat-wisata">
							<div class="row">
								<div class="col-12">
									<p>Pilihan tempat wisata</p>
								</div>
							</div>
							<div class="row" id="daftar-pilihan-wisata">
								{{-- list wisata --}}
							</div>
							<div class="line"></div>
						</div>
						<div class="col-md-12" style="margin-bottom: 10px">
							<h4 style="color: white; margin-top: 10px">Pilihan hotel</h4>
							@for ($i = 0; $i < count($hotels); $i++)
							<div class="col-md-2 @if($i == 0) col-md-offset-1 @endif">
								<label style="text-align: center">
									<input type="radio" class="radio_bintang" name="id_hotel" required value="{{$hotels[$i]->id}}"> <br/>
									Bintang {{$hotels[$i]->bintang_hotel}}<br/>
									@for ($n = 0; $n < $hotels[$i]->bintang_hotel; $n++)
										<i class="icon-star-full full"></i>
									@endfor
								</label>
							</div>
							@endfor
						</div>
						<div class="col-md-4" style="margin-bottom: 20px">
							<h4 style="color: white; margin-top: 10px">Jumlah pesan kamar</h4>
							<input type="number" name="jumlah_kamar" id="jumlah_kamar" placeholder="Jumlah kamar yang dipesan" name="jumlah_kamar" class="form-control" required min="1" onchange="check_kamar()">
						</div>
						<div class="col">
							<input type="submit" id="submit" value="Lanjutkan proses pemesanan" class="btn btn-primary btn-block">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endif
<div id="colorlib-services">
	<div class="container">
		<div class="row">
			<div class="col-md-3 animate-box text-center">
				<div class="services">
					<span class="icon">
						<i class="flaticon-reception"></i>
					</span>
					<h3>24/7 Pelayanan</h3>
					<p>Pelayanan dibuka 24 jam seminggu. Memudahkan Customer dalam memesan biro jasa kami</p>
				</div>
			</div>
			<div class="col-md-3 animate-box text-center">
				<div class="services">
					<span class="icon">
						<i class="flaticon-herbs"></i>
					</span>
					<h3>Destinasi</h3>
					<p>Dstinasi tempat wisata yang sangat memukau, dengan harga yang terjangkau</p>
				</div>
			</div>
			<div class="col-md-3 animate-box text-center">
				<div class="services">
					<span class="icon">
						<i class="flaticon-car"></i>
					</span>
					<h3>Armada</h3>
					<p>Armada kenadaraan yang terbaru, menjamin penumpang nyaman selama berada di perjalanan.</p>
				</div>
			</div>
			<div class="col-md-3 animate-box text-center">
				<div class="services">
					<span class="icon">
						<i class="flaticon-cheers"></i>
					</span>
					<h3>Service</h3>
					<p>Menyediakan tempat beristirahat dengan nyaman, bersih, dan juga konsumsi yang terbaik berasal dari
						indonesia.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="colorlib-amenities">
	<div class="container">
		<div class="row">
			<div class="amenities-flex">
				<div class="amenities-img animate-box" style="background-image: url(images/surabaya.jpg);"></div>
				<div class="desc animate-box">
					<p class="price">
						<span class="free">Surabaya</span>
					</p>
					<p>Kota Surabaya (Jawa: Suroboyo/ꦯꦸꦫꦧꦪ, Madura: Sorěbějě/سَورَبَجَا) adalah ibu kota Provinsi Jawa Timur,
						Indonesia, sekaligus kota metropolitan terbesar di provinsi tersebut.
						Surabaya merupakan kota terbesar kedua di Indonesia setelah Jakarta.
						Kota ini terletak 796 km sebelah timur Jakarta, atau 415 km sebelah barat laut Denpasar, Bali. Surabaya
						terletak di pantai utara Pulau Jawa bagian timur dan berhadapan dengan Selat Madura serta Laut Jawa.
					</p>
				</div>
				<div class="desc animate-box">

					<p class="price">
						<span class="price-room">Free</span>
					</p>
					<p>Kota Bandung merupakan kota metropolitan terbesar di Provinsi Jawa Barat,
						sekaligus menjadi ibu kota provinsi tersebut.
						Kota ini terletak 140 km sebelah tenggara Jakarta,
						dan merupakan kota terbesar di wilayah Pulau Jawa bagian selatan.
						Sedangkan wilayah Bandung Raya (Wilayah Metropolitan Bandung) merupakan metropolitan terbesar ketiga di
						Indonesia setelah Jabodetabek dan Gerbangkertosusila.
					</p>
				</div>
				<div class="amenities-img animate-box" style="background-image: url(images/bandung.jpg);"></div>
				<div class="amenities-img animate-box" style="background-image: url(images/bali.jpg);"></div>
				<div class="desc animate-box">
					<p class="price">
						<span class="free">Bali</span>
					</p>
					<p>Bali adalah sebuah provinsi di Indonesia. Ibu kota provinsi ini adalah Denpasar. Bali juga merupakan salah
						satu pulau di Kepulauan Nusa Tenggara.
						Di awal kemerdekaan Indonesia, pulau ini termasuk dalam Provinsi Sunda Kecil yang beribu kota di Singaraja,
						dan kini terbagi menjadi 3 provinsi: Bali, Nusa Tenggara Barat, dan Nusa Tenggara Timur.
					</p>
				</div>
				<div class="desc animate-box">

					<p class="price">

						<span class="price-room">Jogjakarta</span>
					</p>
					<p>Daerah Istimewa Yogyakarta (Jawa: Dhaérah Istiméwa Ngayogyakarta)
						adalah Daerah Istimewa setingkat provinsi di Indonesia yang merupakan peleburan Negara Kesultanan Yogyakarta
						dan Negara Kadipaten Paku Alaman.
						Daerah Istimewa Yogyakarta terletak di bagian selatan Pulau Jawa,
						dan berbatasan dengan Provinsi Jawa Tengah dan Samudera Hindia.
						Daerah Istimewa yang memiliki luas 3.185,80 km2 ini terdiri atas satu kotamadya,
					</p>
				</div>
				<div class="amenities-img animate-box" style="background-image: url(images/jogjakarta.jpg);"></div>
			</div>
		</div>
	</div>
</div>

<div id="colorlib-testimony" class="colorlib-light-grey">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
				<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
				<h2>CEO & Tour Leader</h2>
				<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and
					Consonantia, there live the blind texts.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 animate-box">
				<div class="testimony text-center">
					<span class="img-user" style="background-image: url(images/Randa.jpg);"></span>
					<span class="user">Randa Nugraha</span>
					<small>CEO</small>
					<blockquote>
						<p></i></p>
					</blockquote>
				</div>
			</div>
			<div class="col-md-4 animate-box">
				<div class="testimony text-center">
					<span class="img-user" style="background-image: url(images/najih.jpg);"></span>
					<span class="user">Najih Muhammad</span>
					<small>Tour Leader</small>
					<blockquote>
						<p></i> </p>
					</blockquote>
				</div>
			</div>
			<div class="col-md-4 animate-box">
				<div class="testimony text-center">
					<span class="img-user" style="background-image: url(images/gege_arya.jpg);"></span>
					<span class="user">Ganang Arya</span>
					<small>Tour Leader</small>
					<blockquote>
						<p></i> </p>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
				<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i
						class="icon-star-full"></i><i class="icon-star-full"></i></span>
				<h2>Sign Up for a Newsletter</h2>
				<p></p>
				<form class="form-inline qbstp-header-subscribe">
					<div class="row">
						<div class="col-md-12 col-md-offset-0">
							<div class="form-group">
								<input type="text" class="form-control" id="email" placeholder="Enter your email">
								<button type="submit" class="btn btn-primary">Subscribe</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop
@section('script')
<script>
	$(document).ready(function () {
		$('#kota').change(function () {
			//console.log($('#kota').val())
			$.ajax({
				url: '/get_wisata/' + $('#kota').val(),
				success: function (data) {
					// console.log(data);
					var el = $('#daftar-pilihan-wisata');
					var parent = $('#tempat-wisata');

					parent.slideUp('medium', function() {
						el.empty();

						if(data.length > 0) {
							for(var i = 0; i < data.length; i++) {
								add_item_wisata(el, data[i]);
							}
						} else {
							el.html('<p style="color: red">Belum ada pilihan tempat wisata. Silakan tanya ke contact person.</p>')
						}

						parent.slideDown("medium");
					});
				}
			});
		});
	});

	function check_kamar() {
		var jumlah_kamar = $('#jumlah_kamar');
		var jumlah_org = $('#jumlah');

		if(jumlah_kamar.val() > jumlah_org.val()) {
			alert('Jumlah tidak boleh melebihi jumlah orang!');
			jumlah_kamar.val(jumlah_kamar.val()-1);
		}
	}

	function add_item_wisata(parent, data) {
		var kolom = document.createElement('div');
		kolom.className = 'col-md-4';
		var checkbox = document.createElement('div');
		checkbox.className = 'checkbox';
		var label = document.createElement('label');
		var input = document.createElement('input');
		input.setAttribute('type', 'checkbox');
		input.setAttribute('value', data.id);
		input.setAttribute('name', 'id_tempat_wisata[]');
		var text = document.createTextNode(data.nama);

		label.appendChild(input);
		label.appendChild(text);

		checkbox.appendChild(label);

		kolom.appendChild(checkbox);
		parent.append(kolom);
	}

	function validasi_input() {
		var elements = $('#daftar-pilihan-wisata input[type="checkbox"]:checked');
		var btn_submit = $('#submit');

		if(elements.length < 1) {
			return false;
		}

		if($('form input:empty')) {
			return false;
		}

		return true;
	}
</script>
@stop