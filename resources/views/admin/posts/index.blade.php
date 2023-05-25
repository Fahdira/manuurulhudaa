@extends('layouts.master')

@section('title','Admin')

@section('content')
@extends('script.session_admin')

@extends('layouts.admin_navbar')


@if(count($post) > 0)
        @foreach ($post as $id)
        <form action="{{route('posts.destroy',$id->post_id)}}" method="POST">
            @csrf
            @method('DELETE')
            <img src="{{ asset('global/img/' . $id->image) }}" alt="gambar" width="100px">
            <p><b>{{$id->title}}</b></p>
            <p>{{$id->description}}</p>
            <a href="{{route('posts.getEdit',$id->post_id)}}">Edit Postingan</a>
            <button type="submit">Hapus</button>
            <br>
        </form>
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
