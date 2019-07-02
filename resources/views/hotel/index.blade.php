@extends('adminlte::page')

@section('title', 'Warok Tour')

@section('content_header')
  <h1>
    Data Hotel
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Hotel</li>
  </ol>
@stop

@section('content')
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <a href='{{url('operator/hotel/create') }}'><button class="btn bg-maroon btn-flat margin"  type="button"><i class="fa fa-plus"><b> Create</b></i></button></a>
        <div class="box">
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Hotel Bintang</th>
                  <th>Harga</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($hotels as $item)
                <tr>
                  <td>{{$item->bintang_hotel}}</td>
                  <td>Rp. {{number_format($item->harga, 2, ',', '.')}}</td>
                  <td>
                    <form action="{{route('hotel.destroy', ['id'=>$item->id])}}" method="post" onsubmit="return confirm('Apa anda yakin ingin menghapus item ini?')">
                      {{ csrf_field() }}
                      <div class="btn-group">
                        <a href="{{route('hotel.edit', ['id'=>$item->id])}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                      </div>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="box-footer">
          {{$hotels->links()}}
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
@stop