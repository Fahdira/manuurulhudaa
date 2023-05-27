@extends('layouts.master')

@section('title','Users')

@section('content')

@extends('layouts.users_navbar')

<p>Daftar</p>

<a href="{{route('siswa.getIndex')}}">1</a>
<a href="{{route('alamat.getIndex')}}">2</a>
<a href="">3</a>
<a href="">4</a>

@if($errors->any())
    @foreach ( $errors->all() as $err )
        <p>{{$err}}</p>
    @endforeach
@endif

<form action="{{route('siswa.postStore')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="nama_siswa">Nama Siswa</label>
    <input type="text" name='nama_siswa' value="{{old ('nama_siswa')}}">
    <br>
    <label for="NIK">NIK</label>
    <input type="number" name="NIK" value="{{old('NIK')}}">
    <br>
    <label for="NISN">NISN</label>
    <input type="number" name="NISN" value="{{old('NISN')}}">
    <br>
    <label for="asal_sekolah">Asal Sekolah</label>
    <input type="text" name="asal_sekolah" value="{{old('asal_sekolah')}}">
    <br>
    <label for="tempat_lahir">Tempat Lahir</label>
        <select name="tempat_lahir" id="tempat_lahir" value="{{old('tempat_lahir')}}">
            <option value="" disabled selected hidden>Pilih :</option>
            <option value="Sukabumi">Sukabumi</option>
            <option value="Cianjur">Cianjur</option>
            <option value="Bandung">Bandung</option>
        </select>
        <br>
    <label for="tanggal_lahir">Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir">
        <br>
    <label for="agama">Agama</label>
    <input type="text" name="agama" value="{{old('agama')}}">
        <br>
    <label for="kelamin">Kelamin</label>
    <select name="kelamin" id="kelamin" value="{{old('kelamin')}}">
        <option value="" disabled selected hidden>Pilih :</option>
        <option value="Laki-laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
    <br>
    <label for="kewarganegaraan">Kewarganegaraan</label>
    <select name="kewarganegaraan" id="kewarganegaraan" value="{{old('kewarganegaraan')}}">
        <option value="" disabled selected hidden>Pilih :</option>
        <option value="WNI">WNI</option>
        <option value="WNA">WNA</option>
    </select>
    <br>
    <label for="anak_ke">Anak Ke</label>
    <input type="number" name="anak_ke" value="anak_ke">
    <br>
    <label for="dari_bersaudara">Dari</label>
    <input type="number" name="dari_bersaudara" value="dari_bersaudara"><text>Bersaudara</text>
    <br>
    <label for="keb_khusus">Kebutuhan Khusus</label>
    <input type="text" name="keb_khusus" placeholder="Dikosongkan bila tidak ada" value="{{old('keb_khusus')}}">
    <br>
    <label for="keb_disabilitas">Kebutuhan Disabilitas</label>
    <input type="text" name="keb_disabilitas" placeholder="Dikosongkan bila tidak ada" value={{old('keb_disabilitas')}}>
    <input type="hidden" name="user_id" value="{{$users->id}}">
    <br>
    <label for="pas_foto">Pas Foto</label>
    <input type="file" name="pas_foto" value="{{ old ('') }}" placeholder="Ukuran 2X3 atau 3X4">
    <br>
    <label for="kartu_keluarga">Kartu Keluarga</label>
    <input type="file" name="kartu_keluarga" value="{{ old ('') }}">
    <br>
    <label for="akta_kelahiran">Akta Kelahiran</label>
    <input type="file" name="akta_kelahiran" value="{{ old ('') }}">
    <br>
    <button type="submit">Lanjutkan</button>
</form>



@section('extra-content')
    <!-- start here -->
@endsection

@section('extra-js')

@endsection

@section('script')
    <!-- start here -->
@endsection

@endsection
