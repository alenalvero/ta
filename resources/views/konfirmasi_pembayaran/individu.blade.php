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
           
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
             
                  <th>Nama Pemesan</th>
                  <th>Tanggal Pemesanan</th>
                  <th>Foto</th>
                  <th>Status</th>
                  <th>Aksi</th>  
                </tr>
                </thead>
                <tbody>
                @foreach($konfirmasi_pembayaran as $item)
                <tr>
              
                  <td>{{$item->pemesanan->nama_pelanggan}}</td>
                  <td>{{$item->created_at->format('d/m/Y')}}</td>
                  <td><img src="{{Storage::url($item->foto)}}" height="50" width="50"></td>
                  <td>
                    @if($item->status == 2)
                    Belum dikonfirmasi
                    @elseif($item->status == 1)
                    Dikonfirmasi
                    @endif
                  </td>
              <td> 
              <div class="btn-group">
                  <button class="btn btn-danger btn-flat btn-xs" type="button"><i class="fa fa-align-left"></i></button>
              <button class="btn btn-info btn-flat btn-xs" type="button"><i class="fa fa-align-right"></i></button>             
                  <button class="btn btn-warning btn-flat btn-xs" type="button"><i class="fa fa-align-center"></i></button>
                  @if($item->status == 2)
                  <form action="/operator/verifikasi_individu" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <button class="btn btn-success btn-flat btn-xs" type="submit"><i class="fa fa-check"></i></button>
                  </form>
                  @endif
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