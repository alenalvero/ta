@extends('adminlte::page')

@section('title', 'Warok Tour')

@section('content_header')
  <h1>
    Data Tables
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Data tables</li>
  </ol>
@stop

@section('content')
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h2>
              <button class="btn btn-block btn-danger btn-flat"  type="button">Edit Data Tempat Wisata</button></a>
            </h2>
          </div>
          <form class="form-horizontal" action="{{url('operator/tempat_wisata', $tempat_wisata->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label" for="nama" >Nama Tempat Wisata</label>
                <div class="col-sm-10">
                  <input  class="form-control" placeholder="Masukkan Nama Tempat Wisata" name="nama" type="text" value="{{$tempat_wisata->nama}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="id_kota" >Kota</label>
                <div class="col-sm-10">
                  <select name="id_kota" class="form-control">
                    @foreach ($kotas as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $tempat_wisata->id_kota ? 'selected' : '' }}>{{$item->nama_kota}}</option>  
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="harga" >Harga</label>
                <div class="col-sm-10">
                  <input name="harga" class="form-control" placeholder="Masukkan Harga" type="text" value="{{$tempat_wisata->harga}}">
                </div>
              </div>
            </div>
            <div class="box-footer">
              <button class="btn btn-info btn-flat pull-right" type="submit">Submit </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@stop