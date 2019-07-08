@extends('adminlte::page')

@section('title', 'Warok Tour')

@section('content_header')
  <h1>
    Data Promo
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Promo</li>
  </ol>
@stop

@section('content')
  <section class="box">
    <div class="box-header">
      <div class="row">
        <div class="col-md-12">
          <a href="{{route('promo.create')}}" class="btn btn-primary">Tambah</a>
        </div>
      </div>
    </div>
    <div class="box-body">
      @if(count($promos)> 0)
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>Kode Promo</th>
            <th>Nama Promo</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Expired</th>
            <th>Diskon (Maks)</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($promos as $promo)
          <tr>
            <td>{{$promo->kode}}</td>
            <td>{{$promo->nama_promo}}</td>
            <td>{{$promo->start->format('d M Y')}}</td>
            <td>{{$promo->expired->format('d M Y')}}</td>
            <td>{{$promo->diskon_persen}}% (Rp. {{number_format($promo->maksimal_diskon, 2, ',', '.')}})</td>
            <td>
              @if($promo->is_active)
              <span class="label label-success">Sedang Aktif</span>
              @elseif($promo->start >= $sekarang)
              <span class="label label-info">Belum Aktif</span>
              @else
              <span class="label label-danger">Tidak Aktif</span>
              @endif
            </td>
            <td>
              <form action="{{route('promo.destroy', $promo->id)}}" method="post" onsubmit="return confirm('Apakah anda yakin ingin menghapus ini?')">
                {{method_field('DELETE')}}
                {{ csrf_field() }}
                <div class="btn-group">
                  <a href="{{route('promo.edit', $promo->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                  <a href="{{route('promo.show', $promo->id)}}" class="btn btn-default"><i class="fa fa-eye"></i></a>
                  <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </div>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @else
      <h3 style="text-align:center">Belum ada data promo. Klik <a href="{{route('promo.create')}}">disini</a> untuk menambahkan data.</h3>
      @endif
    </div>
  </section>
@stop