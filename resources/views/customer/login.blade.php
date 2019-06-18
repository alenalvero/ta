@extends('customer.master')

@section('content')
<div class="container" >
  <div style="max-width: 500px; margin: 50px auto; border-radius: 5px; box-shadow: 20px 20px 60px rgba(0,0,0,.2); padding: 20px 30px">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{route('proses_login_pelanggan')}}" method="post">
      {{ csrf_field() }}
      <h3>Login Akun Pelanggan  Warok Tour</h3>
      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" id="email" placeholder="Email pengguna yang valid" value="{{old('email')}}">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="Password untuk login ke web ini">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
  </div>
</div>
@stop		