@extends('layouts.master')

@section('title','Users')

@section('content')

@extends('layouts.users_navbar')

<p>Daftar</p>

<p>{{$pendaftaran->tahun_pendaftaran}}</p>
<p>{{$pendaftaran->status_pendaftaran}}</p>
<p>{{$pendaftaran->desc_pendaftaran}}</p>

@if (($pendaftaran->status_pendaftaran) == 'dibuka');
        <a href="{{route('siswa.getIndex')}}">Daftar</a>
    @else
        <p>Pendaftaran Telah Ditutup</p>
@endif

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
