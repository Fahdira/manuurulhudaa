@extends('layouts.master_2')

@section('title','Admin')

@section('content')
@extends('script.session_admin')

@include('layouts.admin_navbar')

@if(count($pendaftaran) > 0)
    @foreach ($pendaftaran as $id)
        <form action="{{route('pendaftaran.postChange', $id->id_pendaftaran)}}" method="POST">
            @csrf
            <div class="row-admin">
                <div class="col-xl-12 col-md-12 mb-4">
                    <div class="card shadow h-100 py-2">
                        <div class="card-body" style="padding: 1.25rem 2rem;line-height: 2rem;font-size: 1.1rem">
                            <div class="row">
                                <div class="col-md-2 font-weight-bold">Tahun Pendaftaran : </div>
                                <div class="col-md-4">{{$id->tahun_pendaftaran}}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 font-weight-bold">Status Pendaftaran : </div>
                                <div class="col-md-4">{{$id->status_pendaftaran}}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">{{$id->desc_pendaftaran}}</div>
                                <div class="col-md-12" style="padding-top: 1rem">
                                    <a href="{{route('pendaftaran.getEdit', $id->id_pendaftaran)}}">
                                        <button class="btn btn-success">Edit data</button></a>
                                    <button class ="btn btn-success" type="submit">tutup pendaftaran</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
    @else
        <div class="row-admin">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tidak Ada Data</h1>
            </div>
        </div>
    @endif
<div class="row-admin">
    <p style="padding-left: 1rem">Jika tidak ada data pendaftaran data siswa akan otomatis terhapus. <a href="{{route('pendaftaran.getCreate')}}">Tambahkan data Pendaftaran</a></p>
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
