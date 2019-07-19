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
              <button class="btn btn-block btn-danger btn-flat"  type="button">Edit Data Kota</button></a>
            </h2>
          </div>
          <form class="form-horizontal" action="{{url('operator/kota', $kota->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label" for="nama_kota" >Nama Kota</label>
                <div class="col-sm-10">
                  <input  class="form-control" placeholder="Masukkan Nama Kota" name="nama_kota" type="text" value="{{$kota->nama_kota}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="provinsi" >Provinsi</label>
                <div class="col-sm-10">
                  <input  class="form-control" placeholder="Masukkan Provinsi" name="provinsi" type="text" value="{{$kota->provinsi}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="harga" >Harga </label>
                <div class="col-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon">Rp.</span>
                    <input name="harga" required=required class="form-control" placeholder="Masukkan Harga" type="text" value="{{$kota->harga}}">
                    <span class="input-group-addon">,00</span>
                  </div>
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