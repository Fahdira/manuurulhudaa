@extends('layouts.master')

@section('title','Users')

@section('content')

@include('layouts.users_navbar')

<p>Daftar</p>

<a href="{{route('siswa.getIndex')}}">1</a>
<a href="{{route('alamat.getIndex')}}">2</a>
<a href="{{route('wali.getIndex')}}">3</a>
<a href="">4</a>

@if($errors->any())
    @foreach ( $errors->all() as $err )
        <p>{{$err}}</p>
    @endforeach
@endif
<p>Data Orang Tua / Wali</p>
<p>Ayah</p>

<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nama_ayah">Nama Ayah</label>
    <input type="text" name="nama_ayah" value="{{old ('nama_ayah')}}">
    <br>
    <label for="NIK">NIK</label>
    <input type="text" name="NIK" value="{{old ('NIK')}}">
    <br>
    <label for="no_telepon">No Telepon</label>
    <input type="text" name="no_telepon" value="{{old ('no_telepon')}}">
    <br>
    <label for="tempat_lahir">Tempat lahir</label>
    <input type="text" name="tempat_lahir" value="{{old ('tempat_lahir')}}">
    <br>
    <label for="tanggal_lahir">Tanggal lahir</label>
    <input type="date" name="tanggal_lahir" value="{{old ('tanggal_lahir')}}">
    <br>
    <label for="agama">Agama</label>
    <input type="text" name="agama" value="{{old ('agama')}}">
    <br>
    <label for="status">Status Orang Tua</label>
    <select name="status">
        <option value="" disabled selected hidden>Pilih : </option>
        <option value="Masih Ada">Masih Ada</option>
        <option value="Meninggal">Meninggal</option>
        <option value="Lainnya">Lainnya</option>
    </select>
    <br>
    <label for="kewarganegaraan">Kewarganegaraan</label>
    <select name="kewarganegaraan" value="{{old('kewarganegaraan')}}">
        <option value="" disabled selected hidden>Pilih :</option>
        <option value="WNI">WNI</option>
        <option value="WNA">WNA</option>
    </select>
    <br>
    <label for="riwayat_pendidikan">Riwayat Pendidikan</label>
    <select name="riwayat_pendidikan" value="{{old('riwayat_pendidikan')}}">
        <option value="" disabled selected hidden>Pilih :</option>
        <option value="SD/Sederajat">SD/Sederajat</option>
        <option value="SMP/SLTP">SMP/SLTP</option>
        <option value="SMA/SLTA">SMA/SLTA</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
        <option value="Diploma">Diploma</option>
    </select>
    <br>
    <label for="pekerjaan">Pekerjaan</label>
    <input type="text" name="pekerjaan" value="{{old ('pekerjaan')}}">
    <br>
    <label for="rata_penghasilan">Rata Rata Penghasilan</label>
    <select name="rata_penghasilan" value="{{old('rata_penghasilan')}}">
        <option value="" disabled selected hidden>Pilih :</option>
        <option value="< Rp.500.000,-">< Rp.500.000,-</option>
        <option value="Rp.500.000,- ~ Rp.2.500.000,-">Rp.500.000,- ~ Rp.2.500.000,-</option>
        <option value="Rp.2.500.000,- ~ Rp.5.000.000,-">Rp.2.500.000,- ~ Rp.5.000.000,-</option>
        <option value="Rp.5.000.000,- ~ Rp.10.000.000,-">Rp.5.000.000,- ~ Rp.10.000.000,-</option>
        <option value="> Rp.10.000.000,-">> Rp.10.000.000,-</option>
    </select>
    <br>
    <label for="KTP">foto KTP</label>
    <input type="file" name="KTP" value="{{ old ('') }}">
    <br>
    <input type="hidden" name="id_siswa" value="{{$users->id}}">
    <br>
    <p>Ibu</p>
    <label for="nama_ibu">Nama Ibu</label>
    <input type="text" name="nama_ibu" value="{{old ('nama_ibu')}}">
    <br>
    <label for="NIK_ibu">NIK</label>
    <input type="text" name="NIK_ibu" value="{{old ('NIK_ibu')}}">
    <br>
    <label for="no_telepon_ibu">No Telepon</label>
    <input type="text" name="no_telepon_ibu" value="{{old ('no_telepon_ibu')}}">
    <br>
    <label for="tempat_lahir_ibu">Tempat lahir</label>
    <input type="text" name="tempat_lahir_ibu" value="{{old ('tempat_lahir_ibu')}}">
    <br>
    <label for="tanggal_lahir_ibu">Tanggal lahir</label>
    <input type="date" name="tanggal_lahir_ibu" value="{{old ('tanggal_lahir_ibu')}}">
    <br>
    <label for="agama_ibu">Agama</label>
    <input type="text" name="agama_ibu" value="{{old ('agama_ibu')}}">
    <br>
    <label for="status_ibu">Status Orang Tua</label>
    <select name="status_ibu">
        <option value="" disabled selected hidden>Pilih : </option>
        <option value="Masih Ada">Masih Ada</option>
        <option value="Meninggal">Meninggal</option>
        <option value="Lainnya">Lainnya</option>
    </select>
    <br>
    <label for="kewarganegaraan_ibu">Kewarganegaraan</label>
    <select name="kewarganegaraan_ibu" value="{{old('kewarganegaraan_ibu')}}">
        <option value="" disabled selected hidden>Pilih :</option>
        <option value="WNI">WNI</option>
        <option value="WNA">WNA</option>
    </select>
    <br>
    <label for="riwayat_pendidikan_ibu">Riwayat Pendidikan</label>
    <select name="riwayat_pendidikan_ibu" value="{{old('riwayat_pendidikan_ibu')}}">
        <option value="" disabled selected hidden>Pilih :</option>
        <option value="SD/Sederajat">SD/Sederajat</option>
        <option value="SMP/SLTP">SMP/SLTP</option>
        <option value="SMA/SLTA">SMA/SLTA</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
        <option value="Diploma">Diploma</option>
    </select>
    <br>
    <label for="pekerjaan_ibu">Pekerjaan</label>
    <input type="text" name="pekerjaan_ibu" value="{{old ('pekerjaan_ibu')}}">
    <br>
    <label for="rata_penghasilan_ibu">Rata Rata Penghasilan</label>
    <select name="rata_penghasilan_ibu" value="{{old('rata_penghasilan_ibu')}}">
        <option value="" disabled selected hidden>Pilih :</option>
        <option value="< Rp.500.000,-">< Rp.500.000,-</option>
        <option value="Rp.500.000,- ~ Rp.2.500.000,-">Rp.500.000,- ~ Rp.2.500.000,-</option>
        <option value="Rp.2.500.000,- ~ Rp.5.000.000,-">Rp.2.500.000,- ~ Rp.5.000.000,-</option>
        <option value="Rp.5.000.000,- ~ Rp.10.000.000,-">Rp.5.000.000,- ~ Rp.10.000.000,-</option>
        <option value="> Rp.10.000.000,-">> Rp.10.000.000,-</option>
    </select>
    <br>
    <label for="KTP_ibu">foto KTP</label>
    <input type="file" name="KTP_ibu" value="{{ old ('') }}">
    <button type="submit">Lanjutkan</button>
</form>

@section('extra-content')

@endsection

@section('extra-js')

@endsection

@section('script')

@endsection

@endsection
