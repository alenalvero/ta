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
            <table>
              <td>
                <a href='{{url('operator/tempat_wisata/create') }}'><button class="btn bg-maroon btn-flat margin"  type="button">Create</button></a>
              </td>
            </table>
          </div>
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Nama</th>
                <th>Kota</th>
                <th>Harga</th>
                <th>Aksi</th>  
              </tr>
              </thead>
              <tbody>
                @foreach($tempat_wisata as $tempat)
                <tr>
                  <td>{{$tempat->nama}}</td>
                  <td>{{$tempat->kota->nama_kota}}</td>
                  <td>{{$tempat->harga}}</td>
                  <td> 
                    <div class="btn-group">
                      <a href='{{url('operator/tempat_wisata/'.$tempat->id.'/edit') }}'><button class="btn btn-info btn-flat btn-xs" type="button"><i class="fa fa-edit"></i></button></a>
                      <a href='{{url('operator/tempat_wisata/destroy/'.$tempat->id) }}' onclick="return confirm('Anda yakin ingin menghapus ini?')"><button class="btn btn-danger btn-flat btn-xs" type="button"><i class="fa fa-trash"></i></button></a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="box-footer">
          {!! $tempat_wisata->render() !!}
          </div>
        </div>
      </div>
    </div>
  </section>
@stop