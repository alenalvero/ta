@extends('adminlte::page')

@section('title', 'Warok Tour')

@section('content_header')
  <h1>
    Penggunaan Promo
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Promo</li>
  </ol>
@stop

@section('content')
  <section class="box">
    <div class="box-body">
      <h3>Detail Promo</h3>
      <table class="table table-striped table-bordered">
        <tr>
          <th>Nama Promo</th>
          <td>{{$promo->nama_promo}}</td>
        </tr>
        <tr>
          <th>Kode Promo</th>
          <td>{{$promo->kode}}</td>
        </tr>
        <tr>
          <th>Tanggal Aktif</th>
          <td>{{$promo->start->format('d/m/Y')}}</td>
        </tr>
        <tr>
          <th>Tanggal Expired</th>
          <td>{{$promo->expired->format('d/m/Y')}}</td>
        </tr>
        <tr>
          <th>Diskon</th>
          <td>{{$promo->diskon_persen}}</td>
        </tr>
        <tr>
          <th>Maksimal potongan</th>
          <td>{{$promo->maksimal_diskon}}</td>
        </tr>
      </table>
    </div>
  </section>
@stop