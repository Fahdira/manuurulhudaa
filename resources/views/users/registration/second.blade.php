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

<form action="" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="nama_jalan">Nama Jalan</label>
    <input type="text" name='jalan' value="{{old ('nama_jalan')}}">
    <br>
    <label for="desa">Desa / Kelurahan</label>
    <select name="desa" id="desa" value="{{old('desa')}}">
        <option value="" disabled selected hidden>Pilih :</option>
    </select>
    <label for="kecamatan">Kecamatan</label>
    <input type="text" name="kecamatan" value="{{old('kecamatan')}}">
    <br>
    <label for="kabupaten_kota">Kabupaten Kota</label>
    <input type="text" name="kabupaten_kota" value="{{old('kabupaten_kota')}}">
    <br>
    <label for="provinsi">Provinsi</label>
    <select name="desa" id="desa" value="{{old('desa')}}">
        @foreach ($provinces as $provinsi)
            <option value="{{$provinsi->name}}">{{$provinsi->name}}</option>
        @endforeach
    </select>
    <label for="kode_pos">Kode POS</label>
    <input type="text" name="kode_pos" value="{{old('kode_pos')}}">
    <br>
    <button type="submit">Lanjutkan</button>
</form>

@section('extra-content')
    <!-- start here -->
@endsection

@section('extra-js')
<script>
    function onChangeSelect(url, id, name) {
      // send ajax request to get the cities of the selected province and append to the select tag
      $.ajax({
        url: url,
        type: 'GET',
        data: {
          id: id
        },
        success: function (data) {
          $('#' + name).empty();
          $('#' + name).append('<option>==Pilih Salah Satu==</option>');
          $.each(data, function (key, value) {
            $('#' + name).append('<option value="' + key + '">' + value + '</option>');
          });
        }
      });
    }
    $(function () {
      $('#provinsi').on('change', function () {
        onChangeSelect('{{ route("cities") }}', $(this).val(), 'kota');
      });
      $('#kota').on('change', function () {
        onChangeSelect('{{ route("districts") }}', $(this).val(), 'kecamatan');
      })
      $('#kecamatan').on('change', function () {
        onChangeSelect('{{ route("villages") }}', $(this).val(), 'desa');
      })
    });
</script>
@endsection

@section('script')
    <!-- start here -->
@endsection

@endsection
