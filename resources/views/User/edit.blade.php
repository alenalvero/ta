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
            <h2>
              <button class="btn btn-block btn-danger btn-flat"  type="button">Edit Data User</button></a>
            </h2>
            </table>
            </div>
            <!-- /.box-header -->
        
          <form class="form-horizontal" action="{{url('/admin/user', $user->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label" for="name" >Nama</label>
                  <div class="col-sm-10">
                    <input  class="form-control" placeholder="Masukkan Nama" name="name" type="text" value="{{$user->name}}">
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="email" >Email</label>
                  <div class="col-sm-10">
                    <input name="email" class="form-control" placeholder="Masukkan Email" type="text" value="{{$user->email}}">
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="password" >Password baru</label>
                  <div class="col-sm-10">
                    <input name="password" class="form-control" placeholder="Masukkan Password baru" type="password">
                    <span class="text-muted">* Biarkan kosong jika tidak ingin mengganti password</span>
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox" style="background-color: #f1f1f1; padding: 10px 0">
                      <label> <b>Type user</b><br/>
                        <input type="radio" name="type" value="operator" @if($user->type == 'operator') checked @endif> Operator
                      </label>
                      <br/>
                      <label>
                        <input type="radio" name="type" value="admin" @if($user->type == 'admin') checked @endif> Administrator
                      </label>
                    </div>
                  </div>
                </div>
                </tfoot>
              
            </div>
          
            <!-- /.box-body -->
              <div class="box-footer">
                <button class="btn btn-info btn-flat pull-right" type="submit">Submit </button>
              </div>
            </form>
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