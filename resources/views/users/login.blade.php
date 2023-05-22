@extends('layouts.master')

@section('title','Login')

@section('content')

<p>Login Page User</p>
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
<form method="POST" action="{{ route('users.postLogin') }} ">
    @csrf
    <label for="email">email</label>
    <input type="email" name="email">
    <label for="password">password</label>
    <input type="password" name="password">
    <button type="submit">Login</button>
</form>
<br>
<a href="{{ route('users.getCreate') }}">Register</a>

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
