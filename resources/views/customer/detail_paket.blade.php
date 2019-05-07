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
							<div class="desc animate-box">
							
								
								<h2>{{$paket_tour->nama_tour}}</h2>
								<p>{!! $paket_tour->keterangan !!}</p>
							</div>
						</article>
						
						
					</div>

					<div class="col-md-4 col-md-pull-7">
						<div class="aside animate-box">
							
						<article class="animate-box">
							
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
							
									<h3>{{$paket_tour->nama_tour}}</h3>
							
							<p><a href='{{url('customer_PaketTour/form_input_paket/'.$paket_tour->id.'/pesan') }}' class="btn btn-primary">Book now!</a></p>
					
						</div>
						</article>	
						
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

			