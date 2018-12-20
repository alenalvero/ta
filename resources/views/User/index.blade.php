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
              <a href='{{url('admin/user/create') }}'><button class="btn bg-maroon btn-flat margin"  type="button">Create</button></a>
            </td>
            </table>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Password</th>                
                  <th>Type</th>
                  <th>Aksi</th>  
                </tr>
                </thead>
                <tbody>
@foreach($user as $item)
                <tr>
                  <td>{{$item->name}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->password}}</td>
                  <td>{{$item->type}}</td>
                  
                 
                
            <td> 
              <div class="btn-group">
           <a href='{{url('admin/user/destroy/'.$item->id) }}'> <button class="btn btn-danger btn-flat btn-xs" type="button"><i class="fa fa-align-left"></i></button></a>
      <a href='{{url('admin/user/'.$item->id.'/edit') }}'>  <button class="btn btn-info btn-flat btn-xs" type="button"><i class="fa fa-align-right"></i></button></a>             
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