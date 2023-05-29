@extends('layouts.master')

@section('title','Home')

@section('content')

@include('layouts.navbar')

<p>Main Page</p>
<br>
<a href="{{ route('users.getCreate') }}">Daftar</a>
<a href="{{route('users.getLogin')}}">Login</a>


@endsection
