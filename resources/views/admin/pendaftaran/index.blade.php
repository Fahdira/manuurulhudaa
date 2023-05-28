@extends('layouts.master')

@section('title','Admin')

@section('content')
@extends('script.session_admin')

@include('layouts.admin_navbar')

@if(count($pendaftaran) > 0)
        @foreach ($pendaftaran as $id)
        <form action="{{route('pendaftaran.postChange', $id->id_pendaftaran)}}" method="POST">
            @csrf
            <p>{{$id->tahun_pendaftaran}}</p>
            <p>{{$id->status_pendaftaran}}</p>
            <p>{{$id->desc_pendaftaran}}</p>
            <a href="{{route('pendaftaran.getEdit', $id->id_pendaftaran)}}">Edit data</a>
            <button type="submit">tutup pendaftaran</button>
        </form>
        @endforeach
    @else
        <p>tidak ada data</p>
@endif
<p>Jika tidak ada data pendaftaran data siswa akan otomatis terhapus
</p>
<br>
<br>
<a href="{{route('pendaftaran.getCreate')}}">Tambahkan data Pendaftaran</a>

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
