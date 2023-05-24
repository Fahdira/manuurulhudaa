@extends('layouts.master')

@section('title','Admin')

@section('content')
@extends('script.session_admin')

@extends('layouts.admin_navbar')

<form action="{{route('admin.postUpdateProfile')}}" method="POST">
    @csrf
    <label for="email">Email</label>
    <input type="email"name="email" value="{{$admin->email}}">
    <br>
    <label for="username">Username</label>
    <input type="text"name="username" value="{{$admin->username}}">
    <br>
    <label for="no_telepon">No Telepon</label>
    <input type="tel"name="no_telepon" value="{{$admin->no_telepon}}">
    <br>
    <label for="password">Password</label>
    <input type="password"name="password" value="{{$admin->password}}">
    <br>
    <label for="password">Jabatan</label>
    <input type="text"name="jabatan" value="{{$admin->jabatan}}">
    <br>
    <label for="profile_picture">Profile Picture</label>
    <input type="file" name="profile_picture" value="{{ $admin->profile_picture }}">
    <br>
    <button type="submit" >Save</button>
</form>

<a href="{{route('admin.getIndex')}}">back</a>


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
