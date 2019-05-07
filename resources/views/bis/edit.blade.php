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
              <button class="btn btn-block btn-danger btn-flat"  type="button">Edit Data Bis</button></a>
            </h2>
            </table>
            </div>
            <!-- /.box-header -->
        
          <form class="form-horizontal" action="{{url('operator/bis', $bis->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="box-body">
              
              <div class="form-group">
                <label class="col-sm-2 control-label" for="nama_po" >Nama PO</label>
                  <div class="col-sm-10">
                    <input name="nama_po" required=required class="form-control" placeholder="Masukkan Nama PO" type="text" value="{{$bis->nama_po}}">
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="harga_small" >Harga Small</label>
                  <div class="col-sm-10">
                    <input name="harga_small" required=required class="form-control" placeholder="Masukkan Harga" type="text" value="{{$bis->harga_small}}">
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="harga_large" >Harga Large</label>
                  <div class="col-sm-10">
                    <input name="harga_large" required=required class="form-control" placeholder="Masukkan Harga" type="text" value="{{$bis->harga_large}}">
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