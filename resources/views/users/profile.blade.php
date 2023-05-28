@extends('layouts.master')

@section('title','Users')

@section('content')

@include('layouts.users_navbar')

<p>Beranda</p>
@if (is_null($users->status_pembayaran))
    <p>Silahkan Lakukan Pembayaran ke Rek dibawah atau scan Qr code</p>
    @else
        <p>Silahkan Masuk ke Halaman Daftar</p>
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
