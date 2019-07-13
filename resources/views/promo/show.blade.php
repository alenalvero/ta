@extends('adminlte::page')

@section('title', 'Warok Tour')

@section('content_header')
  <h1>
    Penggunaan Promo
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>Promo</li>
    <li class="active">Penggunaan Promo</li>
  </ol>
@stop

@section('content')
  <section class="box">
    <div class="box-body">
      <h3>Detail Promo</h3>
      <table class="table table-striped table-bordered">
        <tr>
          <th width="150">Nama Promo</th>
          <td>{{$promo->nama_promo}}</td>
        </tr>
        <tr>
          <th>Kode Promo</th>
          <td>{{$promo->kode}}</td>
        </tr>
        <tr>
          <th>Tanggal Aktif</th>
          <td>{{$promo->start->format('d/m/Y')}}</td>
        </tr>
        <tr>
          <th>Tanggal Expired</th>
          <td>{{$promo->expired->format('d/m/Y')}}</td>
        </tr>
        <tr>
          <th>Diskon</th>
          <td>{{$promo->diskon_persen}}</td>
        </tr>
        <tr>
          <th>Maksimal potongan</th>
          <td>Rp. {{number_format($promo->maksimal_diskon, 2, ',', '.')}}</td>
        </tr>
      </table>
    </div>
  </section>
  <section class="box">
    <div class="box-body">
      <h3>Form Paket</h3>
      <div class="row">
        <div class="col-md-12">
          <span class="text-muted">*Tambah paket yang dapat digunakan dengan promo ini</span>
        </div>
        <form action="" method="post" class="col-md-4">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="id_paket">Pilih Paket</label>
            <select name="id_paket" id="id_paket" class="form-control" required>
              <option disabled="disabled" selected value="">Pilih satu</option>
              @foreach ($pakets as $item)
              <option value="{{$item->id}}">{{$item->nama_tour}}</option>
              @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </section>
  <section class="box">
    <div class="box-body">
      <h3>Paket yang diberlakukan promo</h3>
      <table class="table table-striped table-bordered">
        <tr>
          <th>Paket</th>
        </tr>
        @foreach ($promo->get_paket() as $item)
        <tr>
          <td>{{$item->paket->nama_tour}} <a href="{{route('promo_paket.destroy', [$promo->id, $item->id])}}" onclick="return confirm('Apakah anda ingin menghapus item tersebut?')"><i class="fa fa-trash"></i></a></td>
        </tr>
        @endforeach
      </table>
    </div>
  </section>
@stop