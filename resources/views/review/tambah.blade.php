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
        <div class="col-md-8 col-md-offset-2">
          <div class="box" style="box-shadow: 0 10px 20px rgba(0,0,0,.2); padding: 30px 30px">
            <div class="box-body">
              <h3>Berikan review untuk kami</h3>
              <form action="/review/store" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id_pemesanan" value="{{$id}}">
                <div class="form-group" style="color: orange">
                  <div>
                    <input type="radio" required name="rating" id="1" value="5"> <label for="1"><i class="icon icon-star-full"></i><i class="icon icon-star-full"></i><i class="icon icon-star-full"></i><i class="icon icon-star-full"></i><i class="icon icon-star-full"></i></label>
                  </div>
                  <div>
                    <input type="radio" required name="rating" id="2" value="4"> <label for="2"><i class="icon icon-star-full"></i><i class="icon icon-star-full"></i><i class="icon icon-star-full"></i><i class="icon icon-star-full"></i></label>
                  </div>
                  <div>
                    <input type="radio" required name="rating" id="3" value="3"> <label for="3"><i class="icon icon-star-full"></i><i class="icon icon-star-full"></i><i class="icon icon-star-full"></i></label>
                  </div>
                  <div>
                    <input type="radio" required name="rating" id="4" value="2"> <label for="4"><i class="icon icon-star-full"></i><i class="icon icon-star-full"></i></label>
                  </div>
                  <div>
                    <input type="radio" required name="rating" id="5" value="1"> <label for="5"><i class="icon icon-star-full"></i></label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="krisar">Kritik dan saran</label>
                  <textarea style="color: black" required name="review" placeholder="Silakan tuliskan kritik dan saran anda supaya kami bisa menigkatkan kualitas pelayanan kami 😉" class="form-control" rows="4"></textarea>
                </div>
                <a href="/profile" class="btn btn-default" >Kembali</a>
                <button type="submit" class="btn btn-primary">Kirim</button>
              </form>
            </div>
          </div>
        </div>
      </div>
		</div>
	</div>
@stop		