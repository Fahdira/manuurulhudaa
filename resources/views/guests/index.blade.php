@extends('layouts.master')

@section('title','Home')

@section('content')

<p>Main Page</p>
<br>
<a href="{{ route('users.getCreate') }}">Daftar</a>
<a href="{{route('users.getLogin')}}">Login</a>

@section('extra-content')
    <!-- start here -->
@endsection

@section('extra-js')
    <!-- start here -->
@endsection

@section('script')
    <!-- start here -->
@endsection

@endsection
