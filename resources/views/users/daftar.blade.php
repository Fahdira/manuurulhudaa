@extends('layouts.master_2')

@section('title','Users')

@section('content')

@include('layouts.users_navbar')
{{-- <p>{{$pendaftaran->tahun_pendaftaran}}</p>
<p>{{$pendaftaran->status_pendaftaran}}</p>
<p>{{$pendaftaran->desc_pendaftaran}}</p> --}}

@if (($pendaftaran->status_pendaftaran) == 'dibuka')
    <div class="card-acil">
        <a href="{{route('siswa.getIndex')}}">Daftar</a>
    </div>
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
