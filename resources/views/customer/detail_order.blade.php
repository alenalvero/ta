@extends('customer.master')

@section('content')
@section('css')
<style type="text/css">/*hr {
display: block;
margin-top: 0.5em;
margin-bottom: 0.5em;
margin-left: auto;
margin-right: auto;
border-width: 5px;
}*/
hr{  
  
    border:         none;
    border-left:    1px solid hsla(200, 10%, 50%,100);
    height:         50vh;
    width:          1px;       
}
table td, th {
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #fff;
        
    }
    </style>
@stop

		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_5.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner slider-text-inner2 text-center">
				   					<h2>Information</h2>
				   					<h1>About Us</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-about">
			<div class="container">
				<div class="row">
					
					<div class="col-md-7">
					<div class="about animate-box">
						<center><b><font size="5">ORDER DETAIL</font></b></center>
						<center><p>Here you can find the more detailed break down on your order</p></center>
					</div>
					<div class="about animate-box">
					
							<table border="1">
								<p><tr bgcolor='#EE6868'>
									<th width="150" height="30" style="background-color: #eee;">&nbsp;&nbsp;PAKET</th>
									<th width="200" style="background-color: #eee;">&nbsp;&nbsp;HARGA</th>
									<th width="200" style="background-color: #eee;">&nbsp;&nbsp;TOTAL</th>
									<th width="200" style="background-color: #eee;">&nbsp;&nbsp;STATUS</th>
								</tr>
				
								<tr>
									<td height="30">{{$pemesanan_paket_tour->paket_tour->nama_tour}}</td>
									<td>{{$pemesanan_paket_tour->paket_tour->harga}}</td>
									<td></td>
                  
									<td>{{
                  $pemesanan_paket_tour->konfirmasi_pembayaran != null ? $pemesanan_paket_tour->konfirmasi_pembayaran->status == 1 ? 'Sudah dibayar' : 'Menunggu verfikasi' : 'Belum dibayar'
                  }}</td>
								</tr>
				
							
							</p>
							</table>
					</div>
					</div>
					<div class="col-md-1">
						<div class="about animate-box">
							<hr>
						</div>					
					</div>	
					<div class="about animate-box">
					
							<table>
							<p><tr>
									<th width="300" height="10" >&nbsp;&nbsp;NAMA</th>
								</tr>
								<tr>
									<td width="150" height="30" >&nbsp;&nbsp;{{$pemesanan_paket_tour->nama_pelanggan_paket}}</td>
								</tr>
								<tr>	
									<th width="200" >&nbsp;&nbsp;ALAMAT</th>
								</tr>	
								<tr>
									<td width="150" height="30" >&nbsp;&nbsp;{{$pemesanan_paket_tour->alamat}}</td>
								</tr>	
								<tr>
									<th width="200" >&nbsp;&nbsp;NO TELF</th>
								</tr>
								<tr>
									<td width="150" height="30" >&nbsp;&nbsp;{{$pemesanan_paket_tour->no_telp}}</td>
								</tr>
								<tr>
									<th width="200" >&nbsp;&nbsp;TANGGAL</th>
								</tr>
								<tr>
									<td width="150" height="30" >&nbsp;&nbsp;{{$pemesanan_paket_tour->tgl}}</td>
								</tr>
								
					
							
							</p>
							</table>
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