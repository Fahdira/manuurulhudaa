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
                <th>Password</th>
                <th>Status Pembayaran</th>
            </tr>
        </thead>
    @foreach ($users as $id)
        <tbody>
            <tr>
                <td>{{$no}}</td>
                <td>{{$id->email}}</td>
                <td>{{$id->password}}</td>
                <td>{{$id->status_pembayaran}}</td>
            </tr>
        </tbody>
        <?php $no++; ?>
    @endforeach
    </table>
    @else
        <p>tidak ada data</p>
@endif



<a href="{{ route('admin.getIndex') }}">Kembali</a>


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
