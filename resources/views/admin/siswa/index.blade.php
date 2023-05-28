@extends('layouts.master')

@section('title','User Details')

@section('content')
@extends('script.session_admin')

@include('layouts.admin_navbar')

@if(count($siswa) > 0)
    <?php $no = 1; ?>
    <table>
        <thead>
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>asal sekolah</th>
                <th>Tahun daftar</th>
                <th>Kelamin</th>
                <th>User Email</th>
                <th>Status Kelulusan</th>
                <th>Status Pembayaran</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
    @foreach ($siswa as $id)
    <form action="{{route('admin.postChange', $id->id_siswa)}}" method="POST">
        @csrf
        <tbody>
            <tr>
                <td>{{$no}}</td>
                <td>{{$id->nama_siswa}}</td>
                <td>{{$id->asal_sekolah}}</td>
                <td>{{$id->tahun_pendaftaran}}</td>
                <td>{{$id->kelamin}}</td>
                <td>{{$id->getUsers->email}}</td>
                <td>{{$id->status_kelulusan}}</td>
                <td>{{$id->status_pembayaran}}</td>
                <td><a href="{{route('admin.showSiswa', $id->id_siswa)}}">Lihat</a></td>
                <td><button type="submit">Lulus</button></td>
            </tr>
        </tbody>
    </form>
        <?php $no++; ?>
    @endforeach
    </table>
        @else
            <p>tidak ada data</p>
@endif

<button>Download File</button>
<br>

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
