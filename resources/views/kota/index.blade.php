@extends('adminlte::page')

@section('title', 'Warok Tour')

@section('content_header')
  <h1>
    Data Kota
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Kota</li>
  </ol>
@stop

@section('content')
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <a href='{{url('operator/kota/create') }}'><button class="btn bg-maroon btn-flat margin"  type="button"><i class="fa fa-plus"><b> Create</b></i></button></a>
        <div class="box">
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Nama Kota</th>
                  <th>Provinsi</th>
                  <th>Harga</th>
                  <th>Aksi</th>  
                </tr>
              </thead>
              <tbody>
                @foreach($kotas as $item)
                <tr>
                  <td>{{$item->nama_kota}}
                  </td>
                  <td>{{$item->provinsi}}</td>
                  <td>Rp.&nbsp;{{number_format($item->harga, 2, ',', '.')}}</td>
                  <td> 
                    <div class="btn-group">
                      <a href='{{url('operator/kota/'.$item->id.'/edit') }}'>    <button class="btn btn-info btn-flat btn-xs" type="button"><i class="fa fa-edit"></i></button></a> 
                      <a href='{{url('operator/kota/destroy/'.$item->id) }}' onclick="return confirm('Anda yakin menghapus data ini?')">    <button class="btn btn-danger btn-flat btn-xs" type="button"><i class="fa fa-trash"></i></button></a>
                    </div>
                  </td>
                </tr>
                @endforeach 
              </tfoot>
            </table>
        
          </div>
          <div class="box-footer">
          {!! $kotas->render() !!}
            </div>
        </div>
        </div>
      </div>
    </div>
  </section>
@stop