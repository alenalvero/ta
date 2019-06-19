@extends('customer.master')

@section('css')
<style type="text/css">/*hr {
display: block;
margin-top: 0.5em;
margin-bottom: 0.5em;
margin-left: auto;
margin-right: auto;
border-width: 5px;
}*/
hr.vertical{  
  
    border:         none;
    border-left:    1px solid hsla(200, 10%, 50%,100);
    height:         60vh;
    width:          1px;       
}
hr.horizontal{  
  
    border:         none;
    border-top:    1px solid hsla(200, 10%, 50%,100);
    width:         100vw;
    height:          1px;       
}
table td, th {
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #fff;
        
    }
    </style>
@stop

@section('content')
	<div id="colorlib-about">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="about animate-box">
						<b><font size="5">ACCOUNT DETAIL</font></b>
					</div>
					<div class="about animate-box">
						<p>
							Nama:<br>
							<b>{{Auth::user()->name}}</b>
						</p>
						<p>
							Email:<br>
							<b>{{Auth::user()->email}}</b>
						</p>
						<p>
							<a href="/profile/edit"><i class="fa fa-edit"></i> Edit profil</a>
						</p>
						<hr>
						<p>		Warok Tour merupakan biro perjalanan wisata yang memudahkan
						perjalanan wisata anda, tinggal duduk manis anda akan kami antar sesuai tujuan wisata anda.</p>
					</div>
				</div>
				<div class="col-md-1">
					<div class="about animate-box">
						<hr class="vertical">
					</div>					
				</div>
				<div class="col-md-8">
					<div class="about animate-box">
						<b><font size="5">ORDER HISTORY</font></b>
					</div>
					<div class="about animate-box">
						<p>*Click your ORDER-ID to see detail status</p>	
							<table border="1">
								<tr bgcolor='#EE6868'>
									<th width="150" height="30" style="background-color: #eee;">&nbsp;&nbsp;ORDER</th>
									<th width="200" style="background-color: #eee;">&nbsp;&nbsp;DATE</th>
									<th width="200" style="background-color: #eee;">&nbsp;&nbsp;STATUS</th>
									<th width="200" style="background-color: #eee;">&nbsp;&nbsp;TOTAL</th>
								</tr>
								@foreach ($profile as $item)
								<tr>
									<td height="30"></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								@endforeach
							</table>
					</div>
					<div class="about animate-box">
						<p>*Click your ORDER-ID to see detail status</p>	
							<table border="1">
								<tr bgcolor='#EE6868'>
									<th width="150" height="30" style="background-color: #eee;">&nbsp;&nbsp;ORDER</th>
									<th width="200" style="background-color: #eee;">&nbsp;&nbsp;DATE</th>
									<th width="300" style="background-color: #eee;">&nbsp;&nbsp;STATUS</th>
									<th width="200" style="background-color: #eee;">&nbsp;&nbsp;TOTAL</th>
								</tr>
								@foreach ($profile1 as $item)
								<tr>
									<td height="30"><a href='{{url('profile/detail_order/'.$item->id.'/show') }}'>{{$item->id}}</a></td>
									<td>{{date('d/m/Y',strtotime($item->created_at))}}</td>
									<td>{!!
									$item->konfirmasi_pembayaran != null ? $item->konfirmasi_pembayaran->status == 1 ? 'Sudah dibayar' : 'Menunggu verfikasi' : "<a href='".url('profile/konfirmasi_pembayaran/'.$item->id.'/konfirmasi')."'>"."Belum dibayar"."</a>"
									!!}</td>
									<td>dsdsadsa</td>
								</tr>
								@endforeach
							</table>
							{!! $profile1->render() !!}
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