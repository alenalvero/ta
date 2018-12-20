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
              <table>
            <td>
              <a href='{{url('admin/bis/create') }}'><button class="btn bg-maroon btn-flat margin"  type="button"><i class="fa fa-plus"><b> Create</b></i></button></a>
            </td>
            </table>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Jenis Bis</th>
                  <th>Nama PO</th>
                  <th>Harga</th>
                                  
                  <th>Aksi</th>  
                </tr>
                </thead>
                <tbody>
@foreach($biss as $item)
                <tr>
                  <td>{{$item->jenis_bis}}</td>
                  <td>{{$item->nama_po}}
                  </td>
                  <td>{{$item->harga}}</td>
                  
                 
                
            <td> 
              <div class="btn-group">
        <a href='{{url('admin/bis/destroy/'.$item->id) }}'>    <button class="btn btn-danger btn-flat btn-xs" type="button"><i class="fa fa-times"></i></button></a>
        <a href='{{url('admin/bis/'.$item->id.'/edit') }}'>    <button class="btn btn-info btn-flat btn-xs" type="button"><i class="fa fa-align-right"></i></button></a>             
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
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@stop