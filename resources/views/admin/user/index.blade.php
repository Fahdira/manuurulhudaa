@extends('layouts.master')

@section('title','User Details')

@section('content')

@extends('script.session_admin')

@extends('layouts.admin_navbar')



@if(count($users) > 0)
    <?php $no = 1; ?>
    <table>
        <thead>
            <tr>
                <th>no</th>
                <th>email</th>
                <th>No_telepon</th>
                <th>Password</th>
                <th>Status Pembayaran</th>
            </tr>
        </thead>
    @foreach ($users as $id)
        <tbody>
            <tr>
                <td>{{$no}}</td>
                <td>{{$id->email}}</td>
                <td>{{$id->no_telepon}}</td>
                <td>{{$id->password}}</td>
                @if (is_null($id->status_pembayaran))
                    <td>Belum</td>
                @else
                    <td>{{$id->status_pembayaran}}</td>
                @endif
            </tr>
        </tbody>
        <?php $no++; ?>

    @endforeach
    </table>
    @else
        <p>tidak ada data</p>
@endif

<button onclick="showPass()">Show Password</button>
<br>

<a href="{{ route('admin.getIndex') }}">Kembali</a>


@section('extra-content')
    <!-- start here -->
@endsection

@section('extra-js')

@endsection

@section('script')

@endsection

@endsection
