@extends('layouts.master_2')

@section('title','User Details')

@section('content')

@extends('script.session_admin')

@include('layouts.admin_navbar')

@if(count($users) > 0)
    <?php $no = 1; ?>

<div class="row-admin">
    <div class="col-xl-12 col-md-12 mb-4">
        <div class="card shadow h-100 py-2">
            <div class="card-body" style="padding: 1.25rem 2rem;line-height: 2rem;font-size: 1.1rem">
                <h5 class="card-title font-weight-bold">User Account</h5>
                <table class="table table-hover" style="width:100%" id="prestasi-table">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 5%">No</th>
                            <th scope="col" style="width: 30%">Email</th>
                            <th scope="col" style="width: 30%">No Telepon</th>
                            <th scope="col" style="width: 20%">Status Pembayaran</th>
                            <th scope="col" style="width: 15%">Action</th>
                        </tr>
                    </thead>
                    @foreach ($users as $id)
                        <tbody>
                            <tr>
                                <form action="{{route('admin.postPay', $id->id)}}" method="POST">
                                    @csrf
                                    <td scope="col" style="width: 5%">{{$no}}</td>
                                    <td scope="col" style="width: 30%">{{$id->email}}</td>
                                    <td scope="col" style="width: 30%">{{$id->no_telepon}}</td>
                                    @if (($id->status_pembayaran) == 'belum')
                                        <td scope="col" style="width: 20%">Belum</td>
                                        <td scope="col" style="width: 15%"><button id="charge" type="submit" class="btn btn-success">Sudah Bayar</button></td>
                                    @else
                                        <td scope="col" style="width: 20%">Sudah</td>
                                        <td scope="col" style="width: 15%"></td>
                                    @endif
                                </form>
                                <?php $no++ ?>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@else
    <div class="row-admin">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tidak Ada Data</h1>
        </div>
    </div>
@endif

@section('script')
    <!-- Bootstrap core JavaScript-->
    <script src="https://penerimaan.darussalamciamis.or.id/sbadmin/vendor/jquery/jquery.min.js"></script>
    <script src="https://penerimaan.darussalamciamis.or.id/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://penerimaan.darussalamciamis.or.id/sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="https://penerimaan.darussalamciamis.or.id/sbadmin/js/sb-admin-2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        //message with toastr

        var $loading = $('#ajaxSpinnerContainer').hide();
        $(document)
            .ajaxStart(function() {
                $loading.show();
            })
            .ajaxStop(function() {
                $loading.hide();
            });

        $(function() {
            $('.btn-group-fab').on('click', '.btn', function() {
                window.location.href = 'https://wa.me/+6281321551318';
            });
            $('has-tooltip').tooltip();
        });
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
@endsection

@endsection
