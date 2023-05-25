@extends('layouts.master')

@section('title','User Details')

@section('content')
@extends('script.session_admin')

@extends('layouts.admin_navbar')

<p>Nama  : {{$siswa->nama_siswa}}</p>
<p>NIK  : {{$siswa->NIK}}</p>
<p>NISN  : {{$siswa->NISN}}</p>
<p>Asal Sekolah  : {{$siswa->asal_sekolah}}</p>
<p>Tempat Lahir  : {{$siswa->tempat_lahir}}</p>
<p>Tanggal Lahir  : {{$siswa->tanggal_lahir}}</p>
<p>Kelamin  : {{$siswa->kelamin}}</p>
<p>Agama  : {{$siswa->agama}}</p>
<p>Tahun daftar  : {{$siswa->tahun_pendaftaran}}</p>
<p>Anak ke  : {{$siswa->anak_ke}} dari : {{$siswa->dari_bersaudara}} bersaudara</p>
@if (is_null($siswa->keb_khusus))
    <p>Kebutuhan Khusus  : Tidak Ada</p>
    @else
        <p>Kebutuhan Khusus  : {{$siswa->keb_khusus}}</p>
@endif
@if (is_null($siswa->keb_disabilitas))
    <p>Kebutuhan Disabilitas  : Tidak Ada</p>
    @else
        <p>Kebutuhan Disabilitas  : {{$siswa->disabilitas}}</p>
@endif
<p>Status Kelulusan  : {{$siswa->status_kelulusan}}</p>
<p>Status Pemabayran Daftar Ulang  : {{$siswa->status_pembayaran}}</p>
<p>User Account  : {{$siswa->getUsers->email}}</p>
<form action="{{route('admin.postCharge', $siswa->id_siswa)}}" method="POST">
    @csrf
    <a href="{{ route('admin.getSiswaIndex') }}">Kembali</a>
    <button type="submit">Sudah Bayar</button>
</form>



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
