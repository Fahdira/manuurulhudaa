@extends('layouts.master_2')

@section('title','Admin')

@section('content')
@extends('script.session_admin')

@include('layouts.admin_navbar')

<div class="row-admin">
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card shadow py-2">
            <div class="card-body-admin">
                <ol>
                    <img style="height: 150px; padding: 5px; max-width: 100%; border-radius: 50%!important;" src="{{ asset('global/img/' . $admin->profile_picture) }}" alt="">
                    <h3 style="padding-top: 15px">{{$admin->username}}</h3>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card shadow h-100 py-2">
            <div class="card-body pt-4">
                <ol>
                    <p><b>Email :</b> {{$admin->email}}</p>
                    <p><b>Username :</b> {{$admin->username}}</p>
                    <p><b>No Telepon :</b> {{$admin->no_telepon}}</p>
                    <p><b>Jabatan :</b> {{$admin->jabatan}}</p>
                    <a class="btn btn-success" href="{{route('admin.getEditProfile')}}">Edit Profil</a>
                    <a class="btn btn-success" href="{{route('admin.getAdd')}}">Tambah Akun Admin</a>
                </ol>
            </div>
        </div>
    </div>
</div>

@endsection

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
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js">
    </script>
@endsection
