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
            <h2>
              <button class="btn btn-block btn-danger btn-flat"  type="button">Create Data Paket Tour</button></a>
            </h2>
            </table>
            </div>
            <!-- /.box-header -->
        
          <form class="form-horizontal" action="{{url('operator/paket_tour')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label" for="nama_tour" >Nama Paket</label>
                  <div class="col-sm-10">
                    <input  class="form-control" placeholder="Masukkan Nama Paket" name="nama_tour" type="text">
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="foto" >Foto</label>
                  <div class="col-sm-10">
                    <input name="foto"  placeholder="Masukkan Foto" type="file">
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="harga" >Harga</label>
                  <div class="col-sm-10">
                    <input name="harga" class="form-control" placeholder="Masukkan Harga" type="text">
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="keterangan" >Keterangan</label>
                  <div class="col-sm-10">
                    <textarea id="article-ckeditor" name="keterangan" rows="10" cols="80"></textarea>
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

@section('js')
    <script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
@stop