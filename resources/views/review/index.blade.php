@extends('adminlte::page')

@section('title', 'Warok Tour')

@section('content_header')
  <h1>
    Review Pengguna
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Review</li>
  </ol>
@stop

@section('content')
  <section class="box">
    <div class="box-body">
      <table class="table table-bordered table-hover table-striped">
        <thead>
          <tr>
            <td>No</td>
            <td>Rating</td>
            <td>Review</td>
            <td>Tanggal</td>
          </tr>
        </thead>
        <tbody>
          @foreach ($reviews as $item)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->rating}}</td>
            <td>{{$item->review}}</td>
            <td>{{$item->tgl->format('d/m/Y')}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
@stop