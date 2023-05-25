@extends('layouts.master')

@section('title','Admin')

@section('content')
@extends('script.session_admin')

@extends('layouts.admin_navbar')

@if($errors->any())
    @foreach ( $errors->all() as $err )
        <p>{{$err}}</p>
    @endforeach
@endif

<form action="{{route('pendaftaran.postUpdate', $pendaftaran->id_pendaftaran)}}" method="POST">
    @csrf
    <label for="tahun_pendaftaran">Tahun Ajaran</label>
    <input type="year" placeholder="YYYY" min="1999" max="2050" name="tahun_pendaftaran" value="{{$pendaftaran->tahun_pendaftaran}}">
    <script>
        document.querySelector("input[type=year]")
        .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
    </script>
    <br>
    <label for="status_pendaftaran"></label>
    <select name="status_pendaftaran" required="" value="{{$pendaftaran->status_pendaftaran}}">
        <option value="" disabled selected hidden>Pilih :</option>
        <option value="dibuka">Dibuka</option>
        <option value="ditutup">Ditutup</option>
    </select>
    <br>
    <label for="desc_pendaftaran">Deskripsi pendaftaran</label>
    <br>
    <textarea name="desc_pendaftaran" id="desc_pendataran" cols="30" rows="10">{{$pendaftaran->desc_pendaftaran}}</textarea>
    <br>
    <button type="submit" >Upload</button>
</form>
<form action="{{route('pendaftaran.destroy',$pendaftaran->id_pendaftaran)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Hapus Data</button>
</form>

<a href="{{route('pendaftaran.getIndex')}}">back</a>


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
