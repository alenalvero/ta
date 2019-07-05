@extends('adminlte::page')

@section('title', 'Warok Tour')

@section('content_header')
  <h1>
    Tambah data mobil
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>Mobil</li>
    <li class="active">Edit</li>
  </ol>
@stop

@section('content')
  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <form action="{{route('mobil.update', ['id'=>$mobil->id])}}" method="POST">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="id" value="{{$mobil->id}}">
          <div class="form-group">
            <label for="mobil">Mobil</label>
            <input type="text" name="mobil" id="mobil" class="form-control" placeholder="Nama mobil" value="{{$mobil->nama_mobil}}">
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" name="harga" id="harga" class="form-control" placeholder="Contoh: 1000000" value="{{$mobil->harga_mobil}}">
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </section>
@stop