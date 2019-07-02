@extends('adminlte::page')

@section('title', 'Warok Tour')

@section('content_header')
  <h1>
    Tambah data hotel
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>Hotel</li>
    <li class="active">Tambah</li>
  </ol>
@stop

@section('content')
  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <form action="{{route('hotel.store')}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="bintang">Bintang Hotal</label>
            <input type="text" name="bintang_hotel" id="bintang" class="form-control" placeholder="Jumlah bintang hotel">
          </div>
          <div class="form-group">
            <label for="harga">Harga permalam</label>
            <input type="text" name="harga" id="harga" class="form-control" placeholder="Contoh: 1000000">
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </section>
@stop