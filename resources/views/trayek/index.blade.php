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
              <a href='{{url('operator/trayek/create') }}'><button class="btn bg-maroon btn-flat margin"  type="button">Create</button></a>
            </td>
            </table>
            </div>
            <!-- /.box-header -->
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
                  <td>{{$item->kota->nama_kota}}
                  </td>
                  <td>{{$item->tempat_wisata->nama}}</td>
                  
                 
                
            <td> 
              <div class="btn-group">
 <a href='{{url('operator/trayek/destroy/'.$item->id) }}'> <button class="btn btn-danger btn-flat btn-xs" type="button"><i class="fa fa-align-left"></i></button>
 <a href='{{url('operator/trayek/'.$item->id.'/edit') }}'><button class="btn btn-info btn-flat btn-xs" type="button"><i class="fa fa-align-right"></i></button></a>             
            </div>
            </td>
                
                </tr>
 @endforeach 
                </tfoot>
              </table>
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