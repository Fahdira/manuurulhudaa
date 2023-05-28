@extends('layouts.master')

@section('title','Users')

@section('content')

@include('layouts.users_navbar')

<p>Beranda</p>
@if (is_null($users->status_pembayaran))
    <p>Silahkan Lakukan Pembayaran ke Rek dibawah atau scan Qr code</p>
    @else
        @if (count($siswa) > 0)
            <br>
            <p>Nama  : {{$siswa[0]->nama_siswa}}</p>
            <p>NIK  : {{$siswa[0]->NIK}}</p>
            <p>NISN  : {{$siswa[0]->NISN}}</p>
            <p>Asal Sekolah  : {{$siswa[0]->asal_sekolah}}</p>
            <p>Tempat Lahir  : {{$siswa[0]->tempat_lahir}}</p>
            <p>Tanggal Lahir  : {{$siswa[0]->tanggal_lahir}}</p>
            <p>Kelamin  : {{$siswa[0]->kelamin}}</p>
            <p>Agama  : {{$siswa[0]->agama}}</p>
            <p>Tahun daftar  : {{$siswa[0]->tahun_pendaftaran}}</p>
            <p>Anak ke  : {{$siswa[0]->anak_ke}} dari : {{$siswa[0]->dari_bersaudara}} bersaudara</p>
            @if (is_null($siswa[0]->keb_khusus))
                <p>Kebutuhan Khusus  : Tidak Ada</p>
                @else
                    <p>Kebutuhan Khusus  : {{$siswa[0]->keb_khusus}}</p>
            @endif
            @if (is_null($siswa[0]->keb_disabilitas))
                <p>Kebutuhan Disabilitas  : Tidak Ada</p>
                @else
                    <p>Kebutuhan Disabilitas  : {{$siswa[0]->disabilitas}}</p>
            @endif
            <p>Status Kelulusan  : {{$siswa[0]->status_kelulusan}}</p>
            <p>Status Pemabayran Daftar Ulang  : {{$siswa[0]->status_pembayaran}}</p>
        @else
            <p>Silahkan Masuk ke Halaman Daftar</p>
        @endif

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
