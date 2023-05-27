@extends('layouts.master')

@section('title','Users')

@section('content')

@extends('layouts.users_navbar')

<p>Daftar</p>

<a href="{{route('siswa.getIndex')}}">1</a>
<a href="{{route('alamat.getIndex')}}">2</a>
<a href="{{route('wali.getIndex')}}">3</a>
<a href="">4</a>

@if($errors->any())
    @foreach ( $errors->all() as $err )
        <p>{{$err}}</p>
    @endforeach
@endif


@section('extra-content')
    <!-- start here -->
@endsection

@section('extra-js')

@endsection

@section('script')
    <!-- start here -->
@endsection

@endsection
