@extends('adminlte::page')

@section('title', 'Warok Tour')

@section('content_header')
  <h1>
    Data Mobil
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
        <a href='{{route('mobil.create')}}'><button class="btn bg-maroon btn-flat margin"  type="button"><i class="fa fa-plus"><b> Create</b></i></button></a>
        <div class="box">
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Mobile</th>
                  <th>Harga</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($mobils as $item)
                <tr>
                  <td>{{$item->nama_mobil}}</td>
                  <td>Rp. {{number_format($item->harga_mobil, 2, ',', '.')}}</td>
                  <td>
                    <form action="{{route('mobil.destroy', ['id'=>$item->id])}}" method="post" onsubmit="return confirm('Apa anda yakin ingin menghapus item ini?')">
                      {{ csrf_field() }}
                      <div class="btn-group">
                        <a href="{{route('mobil.edit', ['id'=>$item->id])}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
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
          {{$mobils->links()}}
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
@stop