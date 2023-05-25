@extends('layouts.master')

@section('title','Admin')

@section('content')

@extends('layouts.admin_navbar')

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

