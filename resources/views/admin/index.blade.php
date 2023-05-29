@extends('layouts.master_2')

@section('title','Admin')

@section('content')

@include('layouts.admin_navbar')

<div class="Informasi__Siswa">
    <div class="Informasi__Siswa">
        <div class="Form__Informasi-siswa">
            <h1>{{$users->count()}}</h1>
            <p>Total User<a href="{{route('admin.getUserIndex')}}"></a></p>
        </div>
        <div class="Form__Informasi-siswa">
            <h1>{{$siswa->count()}}</h1>
            <p>Siswa Mendaftar<a href="{{route('admin.getSiswaIndex')}}"></a></p>
        </div>
        </div>
    </div>
</div>



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

