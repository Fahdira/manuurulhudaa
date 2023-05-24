@extends('layouts.master')

@section('title','User Details')

@section('content')
@extends('script.session_admin')

@extends('layouts.admin_navbar')

<form action="" method="POST">
    <label for="nama_siswa">Nama Siswa</label>
    <input type="text"name="nama_siswa" value="{{$siswa->nama_siswa}}">
    <label for="status_pembayaran">Status Pembayaran</label>
    <input type="text"name="status_pembayaran" value="{{$siswa->status_pembayaran}}">
    <button>Save</button>
</form>

<a href="{{ route('admin.getIndex') }}">Kembali</a>


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
