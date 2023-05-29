@extends('layouts.master_2')

@section('title','User Details')

@section('content')
@extends('script.session_admin')

@include('layouts.admin_navbar')

@if(count($siswa) > 0)
    <?php $no = 1; ?>
<div class="container">
    <ul class="responsive-table">
      <li class="table-header">
        <div class="col col-1">No</div>
        <div class="col col-2">Nama</div>
        <div class="col col-4">Asal Sekolah</div>
        <div class="col col-4">Tahun Daftar</div>
        <div class="col col-4">Akun Email</div>
        <div class="col col-4">Status Kelulusan</div>
      </li>
      @foreach ($siswa as $id)
        @csrf
            <li class="table-row">
                <div class="col col-1" data-label="Job Id">{{$no}}</div>
                <div class="col col-2" data-label="Customer Name">{{$id->nama_siswa}}</div>
                <div class="col col-3" data-label="Amount">{{$id->asal_sekolah}}</div>
                <div class="col col-3" data-label="Amount">{{$id->tahun_pendaftaran}}</div>
                <div class="col col-3" data-label="Amount">{{$id->getUsers->email}}</div>
                <div class="col col-3" data-label="Amount">{{$id->status_kelulusan}}</div>
                <?php $no++; ?>
            </li>
    @endforeach
    </ul>
  </div>
@else
    <p>tidak ada data</p>
@endif

    {{-- <form action="{{route('admin.postChange', $id->id_siswa)}}" method="POST">
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
    </form> --}}

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
