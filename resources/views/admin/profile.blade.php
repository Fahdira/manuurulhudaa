@extends('layouts.master')

@section('title','Admin')

@section('content')
@extends('script.session_admin')

@extends('layouts.admin_navbar')

<p>username = {{$admin->username}}</p>
<p>No Telp = {{$admin->no_telepon}}</p>
<p>Jabatan = {{$admin->jabatan}}</p>
<img src="{{ asset('global/img/' . $admin->profile_picture) }}" alt="Profile_Picture" width="100px">
<p>Profile Picture</p>
<br>
<a href="{{route('admin.getEditProfile')}}">Edit Profil</a>
<a href="{{route('admin.getAdd')}}">Tambah Akun Admin</a>


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
