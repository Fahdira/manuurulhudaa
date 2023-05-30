@extends('layouts.master_2')

@section('title', 'Daftar Online')

@section('home-active', 'active')

@section('content')

@include('layouts.users_navbar')

@if (is_null($users->status_pembayaran))
    <div class="card-acil">
        <p>Silahkan Lakukan Pembayaran ke Rek dibawah atau scan Qr code</p>
    </div>
    @else
        @if (count($siswa) > 0)
            <br>
            <p>Nama  : {{$siswa[0]->nama_siswa}}</p>
            <p>NIK  : {{$siswa[0]->NIK}}</p>
            <p>NISN  : {{$siswa[0]->NISN}}</p>
            <p>Asal Sekolah  : {{$siswa[0]->asal_sekolah}}</p>
            <p>Tempat Lahir  : {{$siswa[0]->tempat_lahir}}</p>
            <p>Tanggal Lahir  : {{$siswa[0]->tanggal_lahir}}</p>
            <p>Kelamin  : {{$siswa[0]->kelamin}}</p>
            <p>Agama  : {{$siswa[0]->agama}}</p>
            <p>Tahun daftar  : {{$siswa[0]->tahun_pendaftaran}}</p>
            <p>Anak ke  : {{$siswa[0]->anak_ke}} dari : {{$siswa[0]->dari_bersaudara}} bersaudara</p>
            @if (is_null($siswa[0]->keb_khusus))
                <p>Kebutuhan Khusus  : Tidak Ada</p>
                @else
                    <p>Kebutuhan Khusus  : {{$siswa[0]->keb_khusus}}</p>
            @endif
            @if (is_null($siswa[0]->keb_disabilitas))
                <p>Kebutuhan Disabilitas  : Tidak Ada</p>
                @else
                    <p>Kebutuhan Disabilitas  : {{$siswa[0]->disabilitas}}</p>
            @endif
            <p>Status Kelulusan  : {{$siswa[0]->status_kelulusan}}</p>
            <p>Status Pemabayran Daftar Ulang  : {{$siswa[0]->status_pembayaran}}</p>
        @else
        <div class="card-acil">
            <p>Silahkan Masuk ke Halaman Daftar</p>
        </div>

        @endif

@endif

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
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js">
        </script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js">
        </script>
        <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js">
        </script>
        <script>
            $(document).ready(function() {
                $('#prestasi-table').DataTable({
                    paging: false,
                    searching: false,
                    ordering: false,
                    info: false,
                    responsive: true,
                    ajax: "https://penerimaan.darussalamciamis.or.id/mendaftar/getPrestasi",
                    columns: [{
                            data: 'nama',
                            name: 'nama'
                        },
                        {
                            data: 'peringkat',
                            name: 'peringkat'
                        },
                        {
                            data: 'tingkat',
                            name: 'tingkat'
                        },
                        {
                            data: 'tahun',
                            name: 'tahun'
                        }
                    ],
                });
            });
        </script>
@endsection
