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
              <button class="btn btn-block btn-danger btn-flat"  type="button">Create Data User</button></a>
            </h2>
            </table>
            </div>
            <!-- /.box-header -->
        
          <form class="form-horizontal" action="{{url('user')}}" method="post">
            {{csrf_field()}}
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label" for="name" >Nama</label>
                  <div class="col-sm-10">
                    <input  class="form-control" placeholder="Masukkan Nama" name="name" type="text">
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="email" >Email</label>
                  <div class="col-sm-10">
                    <input name="email" class="form-control" placeholder="Masukkan Email" type="text">
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="password" >Password</label>
                  <div class="col-sm-10">
                    <input name="password" class="form-control" placeholder="Masukkan Password" type="text">
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="type"> Klik untuk tipe Administrator
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