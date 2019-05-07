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
								<div class="meta">
									<p>
										<span>August 24, 2017 </span>
										<span>admin </span>
										<span><a href="#">2 Comments</a></span>
									</p>
								</div>
								<h2><a href="#">A Definitive Guide to the Best Dining</a></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, qui quod ipsum harum id, minima nesciunt! Saepe soluta, vitae quas expedita voluptatem voluptates placeat numquam provident quis, atque nisi iure?</p>
							</div>
						</article>
						
						
					</div>

					<div class="col-md-4 col-md-pull-7">
						<div class="aside animate-box">
							<h3><b>Form Reservasi</b><hr></h3>
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
			                    <label for="nama">Nama Lengkap</label>
			                    <div class="form-field">
			                     
			                      <input type="text" name="nama_pelanggan_paket" class="form-control" >
			                    </div>
			                  </div>
			                </div>
			                <div class="col-md-12">
			                  <div class="form-group">
			                    <label for="paket">Paket</label>
			                    <div class="form-field">
			                     
			                      <input type="hidden" name="id_paket" value="{{ $paket_tour->id}}"  class="form-control" >
			                      <input type="text" value="{{ $paket_tour->nama_tour}}"  class="form-control" >
			                    </div>
			                  </div>
			                </div>
			                <div class="col-md-12">
			                  <div class="form-group">
			                    <label for="alamat">Alamat</label>
			                    <div class="form-field">
			                     
			                      <input type="text" name="alamat" class="form-control" >
			                    </div>
			                  </div>
			                </div>
			                <div class="col-md-12">
			                  <div class="form-group">
			                    <label for="no_telp">Nomer Telfon</label>
			                    <div class="form-field">
			                     
			                      <input type="text" name="no_telp" class="form-control" >
			                    </div>
			                  </div>
			                </div>
			                <div class="col-md-12">
			                  <div class="form-group">
			                    <label for="tgl">Tanggal</label>
			                    <div class="form-field">
			                      <i class="icon icon-calendar2"></i>
			                      <input type="text" name="tgl" id="date" class="form-control date" placeholder="Tanggal">
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