@extends('layouts.master')

@section('title','Register')

@section('content')

<p>Register Page</p>
<br>
@if($errors->any())
    @foreach ( $errors->all() as $err )
        <p>{{$err}}</p>
    @endforeach
@endif
<form method="POST" action="{{ route('users.postStore')}} ">
    @csrf
    <label for="email">email</label>
    <input type="email" name="email" value="{{ old ('email') }}">
    <label for="password">password</label>
    <input type="password" name="password" value="{{ old ('password') }}">
    <label for="password-confirmation">confirm password</label>
    <input type="password" name="password_confirmation" value="">
    <button type="submit">Register</button>
</form>
<br>
<a href="{{route('users.getLogin')}}">Login</a>

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
