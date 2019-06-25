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
              <button class="btn btn-block btn-danger btn-flat"  type="button">Edit Data Pemesanan</button></a>
            </h2>
            </table>
            </div>
            <!-- /.box-header -->
        
          <form class="form-horizontal" action="{{url('operator/pemesanan', $pemesanan->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label" for="nama" >Nama Bis</label>
                  <div class="col-sm-10">
                    <select id="id_bis" class="form-control" name="id_bis">
                      @foreach($bis as $b)
                      <option value="{{$b->id}}">{{$b->nama_po}}</option>
                      @endforeach
                    </select>
                  </div>
              </div>
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