@extends('layouts.master')

@section('title','Admin')

@section('content')
@extends('script.session_admin')

@extends('layouts.admin_navbar')

@if($errors->any())
    @foreach ( $errors->all() as $err )
        <p>{{$err}}</p>
    @endforeach
@endif

<form action="{{route('posts.postStore')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="title">Title</label>
    <input type="text" name="title" value="{{ old ('title') }}">
    <input type="hidden" name="admin_id" value="{{$admin->admin_id}}">
    <br>
    <label for="description"></label>
    <textarea name="description" rows="4" cols="50"  value="{{ old ('descripton') }}"></textarea>
    <br>
    <label for="image">Image</label>
    <input type="file" name="image" value="{{ old ('image') }}">
    <button type="submit" >Tambahkan</button>
</form>

<a href="{{route('posts.getIndex')}}">back</a>


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
