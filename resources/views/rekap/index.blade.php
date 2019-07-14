@extends('adminlte::page')

@section('title', 'Warok Tour')

@section('content_header')
  <h1>
    Rekap Aplikasi
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Promo</li>
  </ol>
@stop

@section('content')
  <section class="box">
    <div class="box-body">
      <h3>Cetak Perbulan</h3>
      <form action="{{route('rekap.cetak_bulan')}}" method="post">
        <div class="form-group">
          <label for="bulan">Bulan</label>
          <select name="bulan" id="bulan" class="form-control">
            <option value="" disabled selected>Pilih bulan</option>
            @for ($i = 0; $i < count($bulan); $i++)
            <option value="{{$i}}">{{$bulan[$i]}}</option>
            @endfor
          </select>
        </div>
        <div class="form-group">
          <label for="tahun">Tahun</label>
          <select name="tahun" id="tahun" class="form-control">
            <option value="" disabled selected>Pilih tahun</option>
          </select>
        </div>
        <button class="btn btn-primary">Cetak Rekap Perbulan</button>
      </form>
    </div>
  </section>
  <section class="box">
    <div class="box-body">
      <h3>Cetak Pertahun</h3>
      <form action="{{route('rekap.cetak_tahun')}}" method="post">
        <div class="form-group">
          <label for="tahun">Tahun</label>
          <select name="tahun" id="tahun" class="form-control">
            <option value="" disabled selected>Pilih tahun</option>
          </select>
        </div>
        <button class="btn btn-primary">Cetak Rekap Pertahun</button>
      </form>
    </div>
  </section>
@stop