@extends('layouts.master')

@section('title','Daftar')

@section('content')

@include('layouts.navbar')

@if($errors->any())
    @foreach ( $errors->all() as $err )
        <p>{{$err}}</p>
    @endforeach
@endif

<div class="container-daftar">
    <h1 class="heading-1"> Daftar Online</h1>

    <div class="content-input">
        <form action="{{ route('users.postStore')}} " class="form-input" method="POST">
            @csrf
            <div class="Input">
                <h3 class="Header-daftar">Buat Akun</h3>
                <div class="akun">
                    <input class="akun-data" name="email" type="text" placeholder="  Email" value="{{ old ('email') }}" />
                    <input class="akun-data" name="no_telepon" type="text" placeholder="  No Telpon" value="{{ old ('no_telepon') }}"/>
                </div>

                <div class='akun-2'>
                    <input class="akun-password" type="password" name="password" placeholder="  Password"/>
                    <input class="akun-repassword" type="password" name="password_confirmation" placeholder="  Ulangi Password"/>
                </div>

                <div class="daftar-button">
                    <button class="button-daftar" type="submit"> Register </button>
                </div>

                <div class="ekstra">
                    <a class="Punya-akun" href="{{route('users.getLogin')}}"> Sudah Punya Akun? Masuk !</a>
                </div>
            </div>
        </form>

        <form class="form-info" action="">
            <div class="caption-info">
                <h3> Informasi Pendaftaran </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui veritatis maiores non voluptatem, temporibus in, odit iusto ducimus commodi, quasi ea impedit minus deleniti quam distinctio necessitatibus quis assumenda iure?</p>
                <h3> Kontak yang bisa dihubungi</h3>
                <p>Ecep Abdul Rohman +62</p>
        <p>Saepul Yakin +62</p>
            </div>
        </form>
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
