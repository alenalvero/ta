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
            
            </table>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Pelanggan</th>
                 
                  <th>Tanggal Berangkat</th>
                  <th>Tanggal Kembali</th>
                  <th>Kendaraan</th>
                  <th>Status</th>                
                  <th>Pembayaran</th>
                  <th>Aksi</th>  
                </tr>
                </thead>
                <tbody>
                @foreach($pemesanan as $item)
                <tr>
                  <td>{{$item->nama_pelanggan}}</td>
                  <td>{{$item->tgl}}</td>
                  <td>{{$item->tgl2}}</td>
                  <td>
                    @if($item->bis == null and $item->id_mobil == null)
                    <a href='{{url('operator/pemesanan/'.$item->id.'/edit') }}'>
                      Belum punya kendaraan</a>
                    @else
                      @if ($item->bis != null)
                      {{$item->bis->nama_po}}
                      @else
                      {{$item->mobil->nama_mobil}}
                      @endif
                    @endif
                  </td>
                  <td>
                  @if($item->sudah_dibayar())
                  Sudah dibayar
                  @else 
                  Belum dibayar
                  @endif
                  </td>
                  <td>
                  @if(!is_null($item->id_bis) or !is_null($item->mobil))
                  {{$item->harga_total()}}
                  @endif
                  </td>
                  <td> 
                    <div class="btn-group">
                      <button class="btn btn-danger btn-flat btn-xs" type="button"><i class="fa fa-align-left"></i></button>
                      <a href='{{url('operator/pemesanan/'.$item->id.'/edit') }}'><button class="btn btn-info btn-flat btn-xs" type="button"><i class="fa fa-align-right"></i></button></a>             
                      <button class="btn btn-warning btn-flat btn-xs" type="button"><i class="fa fa-align-center"></i></button>
                    </div>
                  </td>
                </tr>
                @endforeach 
                </tbody>
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