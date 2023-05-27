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

<form action="{{route('alamat.postStore')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nama_jalan">Alamat</label>
    <input type="text" name='nama_jalan' value="{{old ('nama_jalan')}}">
    <br>
    <label>Provinsi</label>
    <select id="provinsi" name="provinsi">
        @foreach ($provinces as $provinsi)
            <option value="" disabled selected hidden>--Pilih Provinsi--</option>
            <option value="{{$provinsi->code}}">{{$provinsi->name}}</option>
        @endforeach
    </select>
    <br>
    <label>Kabupaten atau Kota</label>
    <select id="kabupaten" name="kabupaten_kota">
        <option value="" disabled selected hidden>--Pilih Kabupaten/Kota--</option>
    </select>
    <br>
    <label>Kecamatan</label>
    <select id="kecamatan" name="kecamatan">
        <option value="" disabled selected hidden>--Pilih Kecamatan--</option>
    </select>
    <br>
    <label>Kelurahan atau Desa</label>
    <select id="desa" name="desa">
        <option value="" disabled selected hidden>--Pilih Kelurahan Desa--</option>
    </select>
    <br>
    <label for="kode_pos">Kode POS</label>
    <input type="text" name="kode_pos" value="{{old('kode_pos')}}">
    <br>
    <input type="hidden" name="id_siswa" value="{{$users->id}}">
    <button type="submit">Lanjutkan</button>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script  type="text/javascript">

    $(document).ready(function () {
        $('#provinsi').change(function () {

            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')}
            });
            var id = $(this).val();
            $.ajax({
                type: "GET",
                url: "/users/daftar/alamat/getKabupaten/"+id,
                dataType: "json",

                success: function (data){
                    console.log(data);
                    $('#kabupaten').html(data);
                },

                error: function(error){
                    console.log('error :',error);
                },
            });

            $('#kabupaten').change(function () {
            var id = $(this).val();

                $.ajax({
                    type: "GET",
                    url: "/users/daftar/alamat/getKecamatan/"+id,
                    dataType: "json",

                    success: function (data){
                        console.log(data);
                        $('#kecamatan').html(data);
                    },

                    error: function(error){
                        console.log('error :',error);
                    },
                });

            });

            $('#kecamatan').change(function () {
            var id = $(this).val();

                $.ajax({
                    type: "GET",
                    url: "/users/daftar/alamat/getDesa/"+id,
                    dataType: "json",

                    success: function (data){
                        console.log(data);
                        $('#desa').html(data);
                    },

                    error: function(error){
                        console.log('error :',error);
                    },
                });

            });
        });
    });


</script>

@section('extra-content')
    <!-- start here -->
@endsection

@section('extra-js')

@endsection

@section('script')
    <!-- start here -->
@endsection

@endsection
