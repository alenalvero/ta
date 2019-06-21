@extends('customer.master')

@section('content')
    <div class="container">
      <div class="row">
        @if ($tdk_terbayar)
        <div class="col-sm-4">
          <div class="aside animate-box">
            <h3><b>Form Konfirmasi Pembayaran</b><hr></h3>
            <form method="post" action="{{url('pelanggan/upload_struk/'.$id)}}" class="colorlib-form" style="margin: auto;" enctype="multipart/form-data">
              {{csrf_field()}}
              <input type="hidden" name="id_pemesanan" value="{{$id}}">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="Foto">Foto</label>
                    <div class="form-field">
                      <input type="file" name="foto" >
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
        @endif
        <div class="col-sm-8">
          <article class="animate-box">
            <div class="blog-img" ></div>
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
      </div>
    </div>
@stop