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
                <a href='{{url('operator/paket_tour/create') }}'><button class="btn bg-maroon btn-flat margin"  type="button">Create</button></a>
              </td>
            </table>
          </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Nama Tour</th>
                    <th>Harga</th>
                    <th>Foto</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>  
                  </tr>
                </thead>
                <tbody>
                  @foreach($paket_tour as $item)
                  <tr>
                    <td>{{$item->nama_tour}}</td>
                    <td>Rp. {{number_format($item->harga, 2, ',', '.')}}
                    </td>
                    <td><img src="{{asset('images/'.$item->foto)}}" height="50" width="50"></td> 
                    <td>{!!$item->keterangan!!}</td>
                    <td> 
                      <div class="btn-group">
                        <a href="/operator/paket_tour/{{$item->id}}/edit" class="btn btn-info btn-flat btn-xs"><i class="fa fa-edit"></i></a>
                        <a href="/operator/paket_tour/destroy/{{$item->id}}" class="btn btn-danger btn-flat btn-xs" onclick="return confirm('Anda yakin ingin menghapus ini?')"><i class="fa fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  @endforeach 
                </tbody>
              </table>
            </div>
            <div class="box-footer">
            {!! $paket_tour->render() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop