@extends('layouts.master')

@section('title','User Details')

@section('content')
@extends('script.session_admin')

<p>Halo Admin {{session('admin')}}</p>
<br>
<a href="">Akun user</a>
<a href="">Siswa</a>
<a href="">Pendaftan</a>
<a href="">Update Informasi</a>
<br>


<?php $no = 1; ?>
<table>
    <thead>
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>asal sekolah</th>
            <th>status bayar</th>
            <th>table</th>
        </tr>
    </thead>
@foreach ($siswa as $id)
    <tbody>
        <tr>
            <td>{{$no}}</td>
            <td>{{$id->nama_siswa}}</td>
            <td>{{$id->asal_sekolah}}</td>
            <td>{{$id->status_pembayaran}}</td>
            <td><a href="{{ route('admin.getEditSiswa',$id->id_siswa) }}">Edit</a></td>
        </tr>
    </tbody>
    <?php $no++; ?>
@endforeach
</table>

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
