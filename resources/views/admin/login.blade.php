@extends('layouts.master')

@section('title','Login')

@section('content')
@extends('script.authentication')

<p>Login Page Admin</p>
<br>
@if (session('success'))
    <p>{{session('success')}}</p>
@endif

@if (session('loginError'))
    <p>{{session('loginError')}}</p>
@endif

@if($errors->any())
    @foreach ( $errors->all() as $err )
        <p>{{$err}}</p>
    @endforeach
@endif
<form method="POST" action="{{ route('admin.postLogin') }} ">
    @csrf
    <label for="email">email</label>
    <input type="email" name="email">
    <label for="password">password</label>
    <input type="password" name="password">
    <button type="submit">Login</button>
</form>
<br>

@endsection

@section('extra-content')
    <!-- start here -->
@endsection

@section('extra-js')
    <!-- start here -->
@endsection

@section('script')
    <!-- start here -->
@endsection
