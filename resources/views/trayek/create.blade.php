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
              <button class="btn btn-block btn-danger btn-flat"  type="button">Edit Data Trayek</button></a>
            </h2>
            </table>
            </div>
            <!-- /.box-header -->
        
          <form class="form-horizontal" action="{{url('admin/trayek')}}" method="post">
            {{csrf_field()}}
            
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label" for="asal" >Asal</label>
                  <div class="col-sm-10">
                    <input  class="form-control" placeholder="Masukkan Asal" name="asal" type="text">
                  </div>
              </div>
              
             <div class="form-group">
              
                <label class="col-sm-2 control-label" for="id_kota" >Tujuan</label>
                  <div class="col-sm-10">
                    <select name="id_kota" id="kota" class="form-control">
                    @foreach ($kotas as $item)
                    <option value="{{ $item->id }}">{{$item->nama_kota}}</option>  
                    @endforeach
                    </select>
                  </div>
              </div>
              <div class="form-group">
              
                <label class="col-sm-2 control-label" for="id_tempat_wisata" >Tempat Wisata</label>
                  <div class="col-sm-10">
                    <select name="id_tempat_wisata" id="tempat_wisata" class="form-control">
                    
                    </select>
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


@section('adminlte_js')
<script>
$(document).ready(function() {
  $('#kota').change(function() {
    //console.log($('#kota').val())
    $.ajax({
      url: '/get_wisata/'+$('#kota').val(),
      success: function(data) {
        $('#tempat_wisata').children().remove();
        for(var i = 0; i < data.length; i++) {
          $('#tempat_wisata').append("<option value='"+data[i].id+"'>"+data[i].nama+"</option>");
        }
      }
    });
  });
})
</script>
@stop