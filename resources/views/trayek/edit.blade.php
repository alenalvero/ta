@extends('adminlte::page')

@section('title', 'AdminLTE')

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
              <button class="btn btn-block btn-danger btn-flat"  type="button">Edit Data Trayek</button></a>
            </h2>
          </div>
          <form class="form-horizontal" action="{{url('trayek', $trayek->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label" for="asal" >Asal</label>
                <div class="col-sm-10">
                  <input  class="form-control" placeholder="Masukkan Asal" name="asal" type="text" value="{{$trayek->asal}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="id_kota" >Kota</label>
                <div class="col-sm-10">
                  <select name="id_kota" id="kota" class="form-control">
                  @foreach ($kotas as $items)
                  <option value="{{ $items->id }}" {{ $items->id == $trayek->id_kota ? 'selected' : '' }}>{{$items->nama_kota}}</option>  
                  @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="id_tempat_wisata" >Kota</label>
                <div class="col-sm-10">
                  <select name="id_tempat_wisata" id="tempat_wisata" class="form-control">
                    @foreach ($tempat_wisata as $items)
                    <option value="{{ $items->id }}" {{ $items->id == $trayek->id_tempat_wisata ? 'selected' : '' }}>{{$items->nama}}</option>  
                    @endforeach
                  </select>
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


@section('adminlte_js')
  <script>
  $(document).ready(function() {
    $('#kota').change(function() {
      //console.log($('#kota').val())
      $.ajax({
        url: '/get_wisata/'+$('#kota').val(),
        success: function(data) {
          $('#tempat_wisata').children().remove();
          for(var i = 0; i < data.length; i++) {
            $('#tempat_wisata').append("<option value='"+data[i].id+"'>"+data[i].nama+"</option>");
          }
        }
      });
    });
  })
  </script>
@stop