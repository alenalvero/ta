@extends('adminlte::page')

@section('title', 'Warok Tour And Travel')

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
                  <th>Nama Pelanggan</th>
                  <th>Alamat</th>
                
                  <th>No Telf</th>
                 
                  <th>Paket</th>                
                  <th>Pembayaran</th>
                  <th>Aksi</th>  
                </tr>
                </thead>
                <tbody>
@foreach($pemesanan_paket_tour as $item)
                <tr>
                  <td>{{$item->nama_pelanggan_paket}}</td>
                  <td>{{$item->alamat}}
                  </td>
                  <td>{{$item->no_telp}}</td>
                  
                  <td>{{$item->paket_tour->nama_tour}}</td>
                  <td>{{
                  $item->konfirmasi_pembayaran != null ? $item->konfirmasi_pembayaran->status == 1 ? 'Sudah dibayar' : 'Menunggu verfikasi' : 'Belum dibayar'
                  }}</td>
                 
                
            <td> 
              <div class="btn-group">
            <button class="btn btn-danger btn-flat btn-xs" type="button"><i class="fa fa-align-left"></i></button>
        <button class="btn btn-info btn-flat btn-xs" type="button"><i class="fa fa-align-right"></i></button>             
            <button class="btn btn-warning btn-flat btn-xs" type="button"><i class="fa fa-align-center"></i></button>
            </div>
            </td>
                
                </tr>
 @endforeach 
                </tfoot>
                
              </table>
            </div>
            <div class="box-footer">
          {!! $pemesanan_paket_tour->render() !!}
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