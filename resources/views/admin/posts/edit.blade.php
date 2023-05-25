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

<form action="{{route('posts.postUpdate', $posts->post_id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="title">Title</label>
    <input type="text" name="title" value="{{$posts->title}}"">
    <br>
    <label for="description"></label>
    <textarea name="description" rows="4" cols="50">{{ $posts->description }}</textarea>
    <br>
    <label for="image">Image</label>
    <input type="file" name="image">
    <button type="submit" >Simpan</button>
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
