@extends('layouts.master_2')

@section('title','User Details')

@section('content')
@extends('script.session_admin')

@include('layouts.admin_navbar')

@if(count($siswa) > 0)
    <?php $no = 1; ?>
    <div class="row-admin">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body" style="padding: 1.25rem 2rem;line-height: 2rem;font-size: 1.1rem">
                    <h5 class="card-title font-weight-bold">User Account</h5>
                    <table class="table table-hover" style="width:100%" id="prestasi-table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">No</th>
                                <th scope="col" style="width: 20%">Nama Siswa</th>
                                <th scope="col" style="width: 20%">Asal Sekolah</th>
                                <th scope="col" style="width: 10%">Tahun Daftar</th>
                                <th scope="col" style="width: 15%">Akun Email</th>
                                <th scope="col" style="width: 15%">Status Kelulusan</th>
                                <th scope="col" style="width: 15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $id)
                                <form action="{{route('admin.postChange', $id->id_siswa)}}" method="POST">
                                    @csrf
                                    <td scope="col" style="width: 5%">{{$no}}</td>
                                    <td scope="col" style="width: 5%">{{$id->nama_siswa}}</td>
                                    <td scope="col" style="width: 5%">{{$id->asal_sekolah}}</td>
                                    <td scope="col" style="width: 5%">{{$id->tahun_pendaftaran}}</td>
                                    <td scope="col" style="width: 5%">{{$id->getUsers->email}}</td>
                                    <td scope="col" style="width: 5%">{{$id->status_kelulusan}}</td>
                                    <td scope="col" style="width: 5%">
                                        <button type="submit" class="btn btn-success">
                                            Lulus
                                        </button>
                                    </td>
                                </form>
                                <?php $no++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="row-admin">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tidak Ada Data</h1>
        </div>
    </div>
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
