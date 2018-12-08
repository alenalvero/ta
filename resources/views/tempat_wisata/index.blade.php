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
              <a href='{{url('tempat_wisata/create') }}'><button class="btn bg-maroon btn-flat margin"  type="button">Create</button></a>
            </td>
            </table>
            </div>
            <!-- /.box-header -->
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
                  <td>{{$tempat->kota->nama_kota}}
                  </td>
                  <td>{{$tempat->harga}}</td>
                  
                 
                
            <td> 
              <div class="btn-group">
    <a href='{{url('tempat_wisata/destroy/'.$tempat->id) }}'>    <button class="btn btn-danger btn-flat btn-xs" type="button"><i class="fa fa-align-left"></i></button></a>
    <a href='{{url('tempat_wisata/'.$tempat->id.'/edit') }}'><button class="btn btn-info btn-flat btn-xs" type="button"><i class="fa fa-align-right"></i></button></a>             
            </div>
  
            </td>
                
                </tr>

 @endforeach 

              

                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          <div class="box-footer">
          {!! $tempat_wisata->render() !!}
              </div>
          
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