@extends('adminlte::page')

@section('title', 'Warok Tour')

@section('content_header')
  <h1>
    Data Bis Warok Tour
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Bis</li>
  </ol>
@stop

@section('content')
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <a href='{{url('operator/bis/create') }}'><button class="btn bg-maroon btn-flat margin"  type="button"><i class="fa fa-plus"><b> Create</b></i></button></a>
        <div class="box">
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Nama PO</th>
                  <th>Harga Small</th>
                  <th>Harga Large</th>
                  <th>Aksi</th>  
                </tr>
              </thead>
              <tbody>
                @foreach($biss as $item)
                <tr>
                  <td>{{$item->nama_po}}
                  </td>
                  <td>Rp.&nbsp;{{number_format($item->harga_small, 2, ',', '.')}}</td>
                  <td>Rp.&nbsp;{{number_format($item->harga_large, 2, ',', '.')}}</td>
                  <td> 
                    <div class="btn-group">
                      <a href='{{url('operator/bis/'.$item->id.'/edit') }}'>    <button class="btn btn-info btn-flat btn-xs" type="button"><i class="fa fa-edit"></i></button></a> 
                      <a href='{{url('operator/bis/destroy/'.$item->id) }}' onclick="return confirm('Anda yakin menghapus data ini?')">    <button class="btn btn-danger btn-flat btn-xs" type="button"><i class="fa fa-trash"></i></button></a>
                    </div>
                  </td>
                </tr>
                @endforeach 
              </tfoot>
            </table>
        
          </div>
          <div class="box-footer">
          {!! $biss->render() !!}
            </div>
        </div>
        </div>
      </div>
    </div>
  </section>
@stop