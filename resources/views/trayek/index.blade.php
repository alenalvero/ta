@extends('adminlte::page')

@section('title', 'Warok Tour')

@section('content_header')
    <h1>
      Data Trayek
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Trayek</li>
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
                <a href='{{url('operator/trayek/create') }}'><button class="btn bg-maroon btn-flat margin"  type="button">Create</button></a>
              </td>
            </table>
          </div>
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Asal</th>
                <th>Tujuan</th>
                <th>Tempat Wisata</th>
                <th>Aksi</th>  
              </tr>
              </thead>
              <tbody>
                @foreach($trayek as $item)
                <tr>
                  <td>{{$item->asal}}</td>
                  <td>{{$item->kota->nama_kota}}</td>
                  <td>{{$item->tempat_wisata->nama}}</td>
                  <td> 
                    <div class="btn-group">
                      <a href='{{url('operator/trayek/'.$item->id.'/edit') }}'><button class="btn btn-info btn-flat btn-xs" type="button"><i class="fa fa-edit"></i></button></a>
                      <a href='{{url('operator/trayek/destroy/'.$item->id) }}' onclick="return confirm('Apa anda yakin ingin menghapus ini?')"> <button class="btn btn-danger btn-flat btn-xs" type="button"><i class="fa fa-trash"></i></button>
                    </div>
                  </td>
                </tr>
                @endforeach 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop