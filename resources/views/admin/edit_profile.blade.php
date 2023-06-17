@extends('layouts.master_2')

@section('title','Admin')

@section('content')
@extends('script.session_admin')

@include('layouts.admin_navbar')
<div class="row-admin">
    <div class="col-xl-12 col-md-12 mb-4">
        <div class="card shadow py-2">
            <form action="{{route('admin.postUpdateProfile')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="input-group my-3 px-4">
                        <i class="bi bi-person-fill input-group-text"></i>
                        <input type="text" name="username" value="{{$admin->username}}" class="form-control">
                        <i class="bi bi-envelope-at-fill input-group-text"></i>
                        <p class="input-group-text">{{$admin->email}}</p>
                    </div>
                    <div class="input-group my-3 px-4">
                        <i class="bi bi-whatsapp input-group-text"></i>
                        <input type="text" name="no_telepon" value="{{$admin->no_telepon}}" class="form-control">
                    </div>
                    <div class="input-group my-3 px-4">
                        <i class="bi bi-key-fill input-group-text"></i>
                        <input type="password" name="password" id="Password" value="{{$admin->password}}" class="form-control">
                        <span class="input-group-text">Confirm Password</span>
                        <input type="password" name="confirm_password" id="Password" class="form-control">
                        <button class="input-group-text" onclick="showPass()" type="button">Lihat Password</button>
                    </div>
                    <div class="input-group mb-3 px-4">
                        <label class="input-group-text" for="inputGroupSelect03">Jabatan</label>
                        <select class="form-control" name="jabatan" id="inputGroupSelect03" aria-label="Example select with button addon">
                          <option selected>Pilih...</option>
                          <option value="Kepala Madrasah">Kepala Madrasah</option>
                          <option value="Guru">Guru</option>
                          <option value="Staff">Staff</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 px-4">
                        <label for="profile_picture" for="inputGroupFile01" class="input-group-text">Profile Picture</label>
                        <input type="file" name="profile_picture" class="form-control">
                    </div>
                    <div class="mb-3 px-4">
                        <button type="submit" class="btn btn-success"><i class="bi bi-box-arrow-in-down px-2"></i>Simpan</button>
                    </div>
            </form>
        </div>
    </div>
    <a href="{{route('admin.getProfile')}}" class="btn btn-danger mx-3"><i class="bi bi-arrow-left px-2"></i>back</a>
</div>


@endsection

@section('script')
    <script>
        function showPass() {
        var x = document.getElementById("Password", "ConfirmPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
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
