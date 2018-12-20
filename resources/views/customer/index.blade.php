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
						<form method="post" class="colorlib-form">
		              	<div class="row">
		                <div class="col-md-3">
		                  <div class="form-group">
		                    <label for="date">Tanggal Berangkat</label>
		                    <div class="form-field">
		                      <i class="icon icon-calendar2"></i>
		                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-2">
		                  <div class="form-group">
		                    <label for="jumlah">Jumlah Orang</label>
		                    <div class="form-field">
		                      <i class=""></i>
		                      <input type="text" id="jumlah" class="form-control jumlah" placeholder="Jumlah Orang">
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-2">
		                  <div class="form-group">
		                    <label for="tujuan">Tujuan</label>
		                    <div class="form-field">
		                      <i class="icon icon-arrow-down3"></i>
		                      <select name="tujuan" id="tujuan" class="form-control">
		                        <option value="#">1</option>
		                        <option value="#">2</option>
		                        <option value="#">3</option>
		                        <option value="#">4</option>
		                        <option value="#">5+</option>
		                      </select>
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-2">
		                  <div class="form-group" id="box">
		                    <label for="tempat_wisata">Tempat Wisata</label>
		                    <div class="form-field">
		                      <i class="icon icon-arrow-down3"></i>
		                      <select name="tempat_wisata" id="tempat_wisata" class="form-control">
		                        <option value="#">1</option>
		                        <option value="#">2</option>
		                        <option value="#">3</option>
		                        <option value="#">4</option>
		                        <option value="#">5+</option>
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

		<div id="colorlib-rooms" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Paket Tour</h2>
						<p>Kami siap melayani perjalanan Anda.</p>
					</div>
				</div>
	
		
					
					<div class="row">
				
					<div class="col-md-12 animate-box">
						
						<div class="owl-carousel owl-carousel2">
						@foreach($paket_tour as $item)		
							<div class="item">
							<a href="{{asset('images/'.$item->foto)}}" class="room image-popup-link" style="background-image: url({{asset('images/'.$item->foto)}});"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
									
									<h3>{{$item->nama_tour}}</h3>
									
									<br><br>
									<ul>
										<li><i class="icon-check"></i> Only 10 rooms are available</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									
								</div>
								</a>
							</div>
							@endforeach
						</div>

					</div>
				
		
				
					<div class="col-md-12 text-center animate-box">
						<a href="{{url('/customer_PaketTour') }}">View all rooms <i class="icon-arrow-right3"></i></a>
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
	          <select name="tempat_wisata" id="tempat_wisata" class="form-control">
	            <option value="#">1</option>
	            <option value="#">2</option>
	            <option value="#">3</option>
	            <option value="#">4</option>
	            <option value="#">5+</option>
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
@stop