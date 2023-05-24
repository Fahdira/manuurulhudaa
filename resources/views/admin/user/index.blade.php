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
            <th>email</th>
            <th>Password</th>
        </tr>
    </thead>
@foreach ($users as $id)
    <tbody>
        <tr>
            <td>{{$no}}</td>
            <td>{{$id->email}}</td>
            <td>{{$id->password}}</td>
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
