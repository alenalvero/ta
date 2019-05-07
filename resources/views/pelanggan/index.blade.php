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
           
            </table>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Telp</th>
                  <th>Email</th>                
                  <th>Aksi</th>  
                </tr>
                </thead>
                <tbody>
@foreach($pelanggan as $item)
                <tr>
                  <td>{{$item->nama}}</td>
                  <td>{{$item->alamat}}
                  </td>
                  <td>{{$item->telp}}</td>
                  <td>{{$item->email}}</td>
                 
                
            <td> 
              <div class="btn-group">
          <a href='{{url('operator/pelanggan/destroy/'.$item->id) }}'> <button class="btn btn-danger btn-flat btn-xs" type="button"><i class="fa fa-align-left"></i></button></a>
            </div>
            </td>
                
                </tr>
 @endforeach 
                </tfoot>
              </table>
            </div>
            <div class="box-footer">
          {!! $pelanggan->render() !!}
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