@extends('layouts.master')

@section('title','Users')

@section('content')


<p>Halo User {{session('users')}}</p>
<a href="{{ route('users.getLogout') }}">Logout</a>


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
