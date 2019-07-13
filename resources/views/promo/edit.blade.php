@extends('adminlte::page')

@section('title', 'Warok Tour')

@section('content_header')
  <h1>
    Edit Data Promo
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>Promo</li>
    <li class="active">Edit</li>
  </ol>
@stop

@section('content')
  <section class="box">
    <div class="box-body">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form action="{{route('promo.update', $promo->id)}}" method="post" enctype="multipart/form-data">
        {{method_field('PUT')}}
        {{ csrf_field() }}
        <div class="form-group">
          <label for="nama_promo">Nama Promo</label>
          <input type="text" class="form-control" id="nama_promo" name="nama_promo" placeholder="Nama promo" value="{{$promo->nama_promo}}">
        </div>
        <div class="form-group">
          <label for="kode">Kode Promo</label>
          <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode promo" value="{{$promo->kode}}">
        </div>
        <div class="form-group">
          <label>Gambar promo</label><br/>
          <img src="{{asset('storage/'.$promo->foto)}}" alt="" height="128"><br/><br/>
          <label for="gambar_promo">Upload Gambar Baru</label>
          <input type="file" class="form-control" id="gambar_promo" name="gambar_promo" value="{{old('gambar_promo')}}">
        </div>
        <div class="form-group">
          <label for="start">Tanggal Aktif</label>
          <input type="text" class="form-control datepicker" id="start" name="start" placeholder="Tanggal promo akktif" value="{{$promo->start->format('d/m/Y')}}">
        </div>
        <div class="form-group">
          <label for="expired">Tanggal Expired</label>
          <input type="text" class="form-control datepicker" id="expired" name="expired" placeholder="Tanggal promo tidak aktif" value="{{$promo->expired->format('d/m/Y')}}">
        </div>
        <div class="form-group">
          <label for="diskon_persen">Diskon</label>
          <input type="number" class="form-control" id="diskon_persen" name="diskon_persen" placeholder="Diskon dalam persen" required value="{{$promo->diskon_persen}}">
        </div>
        <div class="form-group">
          <label for="maksimal_diskon">Maksimal potongan</label>
          <input type="number" class="form-control" id="maksimal_diskon" name="maksimal_diskon" placeholder="Maksimal potongan dalam rupiah" required value="{{$promo->maksimal_diskon}}">
        </div>
        <a href="{{route('promo.index')}}" class="btn btn-link">Batal</a>
        <div class="pull-right">
          <button type="reset" class="btn btn-default">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </section>
@stop