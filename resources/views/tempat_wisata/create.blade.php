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
              <button class="btn btn-block btn-danger btn-flat"  type="button">Create Data Tempat Wisata</button></a>
            </h2>
            </table>
            </div>
            <!-- /.box-header -->
        
          <form class="form-horizontal" action="{{url('tempat_wisata')}}" method="post">
            {{csrf_field()}}
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label" for="nama" >Nama Tempat Wisata</label>
                  <div class="col-sm-10">
                    <input  class="form-control" placeholder="Masukkan Nama Tempat Wisata" name="nama" type="text">
                  </div>
              </div>
              
              <div class="form-group">
              
                <label class="col-sm-2 control-label" for="id_kota" >Kota</label>
                  <div class="col-sm-10">
                    <select name="id_kota" class="form-control">
                    @foreach ($kotas as $item)
                    <option value="{{ $item->id }}">{{$item->nama_kota}}</option>  
                    @endforeach
                    </select>
                  </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label" for="harga" >Harga</label>
                  <div class="col-sm-10">
                    <input name="harga" class="form-control" placeholder="Masukkan Harga" type="text">
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