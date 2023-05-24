@extends('layouts.master')

@section('title','Admin')

@section('content')
@extends('script.session_admin')

<p>Halo Admin {{session('admin')}}</p>
<a href="{{ route('admin.getLogout') }}">Logout</a>
<br>
<a href="{{route('admin.getUserIndex')}}">Akun user</a>
<a href="{{route('admin.getSiswaIndex')}}">Siswa</a>
<a href="">Pendaftan</a>
<a href="">Update Informasi</a>
<br>
<p>
    Total User = <a href="{{route('admin.getUserIndex')}}">{{$users->count()}}</a>
</p>

<p>Total Siswa Mendaftar =  <a href="{{route('admin.getSiswaIndex')}}">{{$siswa->count()}}</a></p>

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

