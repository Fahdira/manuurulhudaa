@extends('layouts.master')

@section('title','Home')

@section('content')

@include('layouts.navbar')

<div>
    <div class="Container-home-1">
        <img src="" alt="" class="img-1"/>
        <div class="Content-home-1">
            <h1 class="Heading-home-1"> MAN DARUSSALAM </h1>
            <p>Pusat lembaga pendidikan Islam yang menyiapkan pemimpin-pemimpin masa depan</p>
            <div class="daftar-online-button">
                <button onClick="" class="Button-DaftarOnline"> Daftar Online </button>
            </div>
        </div>
    </div>

</div>

<p>Main Page</p>
<br>
<a href="{{ route('users.getCreate') }}">Daftar</a>
<a href="{{route('users.getLogin')}}">Login</a>


@endsection
