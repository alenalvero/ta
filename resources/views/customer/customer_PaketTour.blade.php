@extends('customer.master')

@section('content')
<table border="1">
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					@foreach ($promos as $item)
					<li style="background-image: url('{{asset('storage/'.$item->foto)}}'); background-size:cover">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
									<div class="slider-text-inner text-center">
										<h2>{{$item->start->format('d/m/Y')}} - {{$item->expired->format('d/m/Y')}}</h2>
										<h1>{{$item->nama_promo}}</h1>
										<h2>Kode: {{$item->kode}}</h2>
									</div>
								</div>
							</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</aside>
		<div id="colorlib-rooms" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					@foreach($customer_PaketTour as $item)	
					<div class="col-md-4 room-wrap animate-box">
					<a href="{{asset('images/'.$item->foto)}}" class="room image-popup-link" style="background: url('{{asset('images/'.$item->foto)}}'); background-size:cover">
					</a>
						
						<div class="desc text-center">
							<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
							
							<h3>{{$item->nama_tour}}</h3>
							<p class="price">
								<span class="currency">Rp.</span>
								<span class="price-room">{{$item->harga}}</span>
								<span class="per">/ per package</span>
							</p>
							
							<p><a href='{{url('customer_PaketTour/detail_paket/'.$item->id.'/detail') }}' class="btn btn-primary btn-warning">Detail</a></p>
							@if(Auth::check())
							<p><a href='{{url('customer_PaketTour/form_input_paket/'.$item->id.'/pesan') }}' class="btn btn-primary">Book now!</a></p>
							@endif
						</div>
					
					
					</div>
					@endforeach
					
				</div>
				<div class="box-footer">
          <center>{!! $customer_PaketTour->render() !!}</center>
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
	

