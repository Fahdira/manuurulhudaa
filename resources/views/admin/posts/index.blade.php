@extends('layouts.master')

@section('title','Admin')

@section('content')
@extends('script.session_admin')

@extends('layouts.admin_navbar')

@if(count($post) > 0)
        @foreach ($post as $id)
            <p>{{$id->title}}</p>
        @endforeach
    @else
        <p>tidak ada data</p>
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
