@extends('adminlte::page')

@section('title', 'Warok Tour')

@section('content_header')
    <h1>
      Data Tables
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="/operator/bis">Bis</a></li>
      <li class="active">Edit</li>
    </ol>
@stop

@section('content')
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h2>
              <button class="btn btn-block btn-danger btn-flat"  type="button">Edit Data Bis</button></a>
            </h2>
          </div>
          <form class="form-horizontal" action="{{url('operator/bis', $bis->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label" for="nama_po" >Nama PO</label>
                <div class="col-sm-10">
                  <input name="nama_po" required=required class="form-control" placeholder="Masukkan Nama PO" type="text" value="{{$bis->nama_po}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="harga_small" >Harga Small</label>
                <div class="col-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon">Rp.</span>
                    <input name="harga_small" required=required class="form-control" placeholder="Masukkan Harga" type="text" value="{{$bis->harga_small}}">
                    <span class="input-group-addon">,00</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="harga_large" >Harga Large</label>
                <div class="col-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon">Rp.</span>
                    <input name="harga_large" required=required class="form-control" placeholder="Masukkan Harga" type="text" value="{{$bis->harga_large}}">
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