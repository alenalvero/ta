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
      <form action="{{route('rekap.cetak_bulan')}}" method="get" class="form-inline" target="_blank">
        <div class="form-group">
          <label for="bulan">Bulan</label><br/>
          <select name="bulan" id="bulan" class="form-control" required>
            <option value="" disabled selected>Pilih bulan</option>
            @for ($i = 0; $i < count($bulans); $i++)
            <option value="{{$i}}">{{$bulans[$i]}}</option>
            @endfor
          </select>
        </div>
        <div class="form-group">
          <label for="tahun">Tahun</label><br/>
          <select name="tahun" id="tahun" class="form-control" required>
            <option value="" disabled selected>Pilih tahun</option>
            @foreach ($tahuns as $tahun)
            <option value="{{$tahun->thn}}">{{$tahun->thn}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="jenis_pemesanan">Jenis Pemesanan</label><br/>
          <select name="jenis_pemesanan" id="jenis_pemesanan" class="form-control" required>
            <option value="" disabled selected>Pilih Jenis Pemesanan</option>
            <option value="1">Pemesanan Individu</option>
            <option value="2">Pemesanan Paket</option>
          </select>
        </div>
        <br/>
        <br/>
        <button class="btn btn-primary">Cetak Rekap Perbulan</button>
      </form>
    </div>
  </section>
  <section class="box">
    <div class="box-body">
      <h3>Cetak Pertahun</h3>
      <form action="{{route('rekap.cetak_tahun')}}" method="get" class="form-inline" target="_target">
        <div class="form-group">
          <label for="tahun">Tahun</label><br/>
          <select name="tahun" id="tahun" class="form-control" required>
            <option value="" disabled selected>Pilih tahun</option>
            @foreach ($tahuns as $tahun)
            <option value="{{$tahun->thn}}">{{$tahun->thn}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="jenis_pemesanan">Jenis Pemesanan</label><br/>
          <select name="jenis_pemesanan" id="jenis_pemesanan" class="form-control" required>
            <option value="" disabled selected>Pilih Jenis Pemesanan</option>
            <option value="1">Pemesanan Individu</option>
            <option value="2">Pemesanan Paket</option>
          </select>
        </div>
        <br/>
        <br/>
        <button class="btn btn-primary">Cetak Rekap Pertahun</button>
      </form>
    </div>
  </section>
@stop