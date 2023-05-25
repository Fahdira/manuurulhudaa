@extends('layouts.master')

@section('title','Admin')

@section('content')
@extends('script.session_admin')

@extends('layouts.admin_navbar')

@if(count($post) > 0)
        @foreach ($post as $id)
            <img src="{{ asset('global/img/' . $id->image) }}" alt="gambar" width="100px">
            <p><b>{{$id->title}}</b></p>
            <p>{{$id->description}}</p>
            <a href="">Edit Postingan</a>
            <a href="">Hapus Postingan</a>
            <br>
        @endforeach
    @else
        <p>tidak ada data</p>
@endif

<a href="{{route('posts.getCreate')}}">Tambah Informasi</a>

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
