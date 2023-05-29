@extends('layouts.master_2')

@section('title','User Details')

@section('content')

@extends('script.session_admin')

@include('layouts.admin_navbar')

@if(count($users) > 0)
    <?php $no = 1; ?>
<div class="container">
    <ul class="responsive-table">
      <li class="table-header">
        <div class="col col-1">No</div>
        <div class="col col-2">Email</div>
        <div class="col col-3">No Telepon</div>
        <div class="col col-2">Status Pembayaran</div>
        <div class="col col-4">Action</div>
      </li>
      @foreach ($users as $id)
      <form action="{{route('admin.postPay', $id->id)}}" method="POST">
        @csrf
            <li class="table-row">
                <div class="col col-1" data-label="No">{{$no}}</div>
                <div class="col col-2" data-label="Email">{{$id->email}}</div>
                <div class="col col-2" data-label="No Telepon">{{$id->no_telepon}}</div>
                @if (($id->status_pembayaran) == 'belum')
                    <div class="col col-2" data-label="Status Pembayaran">Belum</div>
                    <button type="submit">Sudah Bayar</button>
                @else
                    <div class="col col-2" data-label="Payment Status">{{$id->status_pembayaran}}</div>
                @endif
                <?php $no++; ?>
            </li>
        </form>
    @endforeach
    </ul>
  </div>
@else
    <p>tidak ada data</p>
@endif

@section('extra-content')
    <!-- start here -->
@endsection

@section('extra-js')

@endsection

@section('script')

@endsection

@endsection
