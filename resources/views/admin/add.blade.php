@extends('layouts.master')

@section('title','Admin')

@section('content')
@extends('script.session_admin')

@include('layouts.admin_navbar')

@if($errors->any())
    @foreach ( $errors->all() as $err )
        <p>{{$err}}</p>
    @endforeach
@endif

<form action="{{route('admin.postAdd')}} " method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="email">Email</label>
    <input type="email" name="email" value="{{ old ('email') }}">
    <br>
    <label for="username">Username</label>
    <input type="text" name="username" value="{{ old ('username') }}">
    <br>
    <label for="no_telepon">No Telepon</label>
    <input type="tel" name="no_telepon" value="{{ old ('no_telepon') }}">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" value="{{ old ('password') }}">
    <br>
    <label for="password">Jabatan</label>
    <input type="text" name="jabatan" value="{{ old ('jabatan') }}">
    <br>
    <label for="profile_picture">Profile Picture</label>
    <input type="file" name="profile_picture">
    <br>
    <button type="submit" >Register</button>
</form>

<a href="{{route('admin.getProfile')}}">back</a>


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
