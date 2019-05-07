@extends('customer.master')

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
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
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
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
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
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
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
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
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
						<form method="post" class="colorlib-form" action="{{route('customer.create')}}">
						{{csrf_field()}}
		              	<div class="row">
		                 <div class="col-md-3">
		                  <div class="form-group">
		                    <label for="date">Tanggal Berangkat</label>
		                    <div class="form-field">
		                      <i class="icon icon-calendar2"></i>
		                      <input name="tgl" type="text" id="date" class="form-control date" placeholder="Check-in date">
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-2">
		                  <div class="form-group">
		                    <label for="jumlah">Jumlah Orang</label>
		                    <div class="form-field">
		                      <i class=""></i>
		                      <input name="jumlah_orang" type="text" id="jumlah" class="form-control jumlah" placeholder="Jumlah Orang">
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-2">
		                  <div class="form-group">
		                    <label for="id_kota">Tujuan</label>
		                    <div class="form-field">
		                      <i class="icon icon-arrow-down3"></i>
		                      <select name="id_kota" id="kota" class="form-control">
		                    @foreach ($kotas as $item)
                    			<option value="{{ $item->id }}">{{$item->nama_kota}}</option>  
                   			@endforeach
		                      </select>
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-2">
		                  <div class="form-group" id="box">
		                    <label for="id_tempat_wisata">Tempat Wisata</label>
		                    <div class="form-field">
		                      <i class="icon icon-arrow-down3"></i>
		                      <select name="id_tempat_wisata[]" id="tempat_wisata" class="form-control tempat_wisata">
		                       
		                      </select>
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-1" id="box2">
		                  <input type="button" id="tambah" value="+" class="btn btn-success btn-block">
		                </div>
		                <div class="col-md-2">
		                  <input type="submit" name="submit" id="submit" value="Search" class="btn btn-primary btn-block">
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
							<p>Menyediakan tempat beristirahat dengan nyaman, bersih, dan juga konsumsi yang terbaik berasal dari indonesia.</p>
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
						<p>Kota Surabaya (Jawa: Suroboyo/ꦯꦸꦫꦧꦪ, Madura: Sorěbějě/سَورَبَجَا) adalah ibu kota Provinsi Jawa Timur, Indonesia, sekaligus kota metropolitan terbesar di provinsi tersebut. 
							Surabaya merupakan kota terbesar kedua di Indonesia setelah Jakarta. 
							Kota ini terletak 796 km sebelah timur Jakarta, atau 415 km sebelah barat laut Denpasar, Bali. Surabaya terletak di pantai utara Pulau Jawa bagian timur dan berhadapan dengan Selat Madura serta Laut Jawa.
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
							Sedangkan wilayah Bandung Raya (Wilayah Metropolitan Bandung) merupakan metropolitan terbesar ketiga di Indonesia setelah Jabodetabek dan Gerbangkertosusila. 
						</p>	
							</div>
						<div class="amenities-img animate-box" style="background-image: url(images/bandung.jpg);"></div>
						<div class="amenities-img animate-box" style="background-image: url(images/bali.jpg);"></div>
						<div class="desc animate-box">
							<p class="price">
								<span class="free">Bali</span>
							</p>
							<p>Bali adalah sebuah provinsi di Indonesia. Ibu kota provinsi ini adalah Denpasar. Bali juga merupakan salah satu pulau di Kepulauan Nusa Tenggara. 
							Di awal kemerdekaan Indonesia, pulau ini termasuk dalam Provinsi Sunda Kecil yang beribu kota di Singaraja, dan kini terbagi menjadi 3 provinsi: Bali, Nusa Tenggara Barat, dan Nusa Tenggara Timur.
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
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
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
$(document).ready(function() {
  
     $("#tambah").click(function() {
       $("#box").append(`
	       	<div class="form-field">
		        <i class="icon icon-arrow-down3"></i>
	          <select name="id_tempat_wisata[]" id="tempat_wisata" class="form-control tempat_wisata">
	        
	          </select>
	        </div>`
	        );
       $("#box2").append(`
		        <input type="button" id="tambah" value="x" onclick="hapus(this)" class="btn btn-danger" style="margin-top: 3px;">`
	        );
     })
  
     $("#tombol_pre").click(function() {
       $("#box").prepend("<p>Learning jQuery...</p>");
     })
  
   });

function hapus(e) {
	// console.log($('#box').children().eq($(e).index()+1));
	$('#box').children().eq($(e).index()+1).remove();
	$(e).remove();
}
</script>
<script>
$(document).ready(function() {
  $('#kota').change(function() {
    //console.log($('#kota').val())
    $.ajax({
      url: '/get_wisata/'+$('#kota').val(),
      success: function(data) {
        $('.tempat_wisata').children().remove();
        for(var i = 0; i < data.length; i++) {
          $('.tempat_wisata').append("<option value='"+data[i].id+"'>"+data[i].nama+"</option>");
        }
      }
    });
  });
})
</script>
@stop