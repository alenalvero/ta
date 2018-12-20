@extends('customer.master')

@section('content')
<table border="1">
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_5.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner slider-text-inner2 text-center">
				   					<h2>Choose our Best</h2>
				   					<h1>Rooms &amp; Suites</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
	
		<div id="colorlib-rooms" class="colorlib-light-grey">
			
			<div class="container">
				<div class="row">
					@foreach($paket_tour as $item)	
					<div class="col-md-4 room-wrap animate-box">
					<a href="{{asset('images/'.$item->foto)}}" class="room image-popup-link" style="background: url('{{asset('images/'.$item->foto)}}'); background-size:cover">
					</a>
						
						<div class="desc text-center">
							<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
							<h3>{{$item->nama_paket}}</h3>
							<p class="price">
								<span class="currency">Rp.</span>
								<span class="price-room">{{$item->harga}}</span>
								<span class="per">/ per package</span>
							</p>
							<ul>
								<li><i class="icon-check"></i> {{$item->keterangan}}</li>
								<li><i class="icon-check"></i> Breakfast included</li>
								<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
							</ul>
							<p><a class="btn btn-primary">Book now!</a></p>
					
						</div>
					
					
					</div>
					@endforeach
					
				</div>
			</div>
		</div>
</table>		
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
		
	</div>
	@stop
	

