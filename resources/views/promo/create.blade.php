@extends('adminlte::page')

@section('title', 'Warok Tour')

@section('content_header')
  <h1>
    Tambah Data Promo
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>Promo</li>
    <li class="active">Tambah</li>
  </ol>
@stop

@section('content')
  <section class="box">
    <div class="box-body">
      <form action="{{route('promo.store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="nama_promo">Nama Promo</label>
          <input type="text" class="form-control" id="nama_promo" name="nama_promo" placeholder="Nama promo" required>
        </div>
        <div class="form-group">
          <label for="kode">Kode Promo</label>
          <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode promo" required>
        </div>
        <div class="form-group">
          <label for="start">Tanggal Aktif</label>
          <input type="text" class="form-control datepicker" id="start" name="start" placeholder="Tanggal promo akktif" required>
        </div>
        <div class="form-group">
          <label for="expired">Tanggal Expired</label>
          <input type="text" class="form-control datepicker" id="expired" name="expired" placeholder="Tanggal promo tidak aktif" required>
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