@extends('layouts.master_2')

@section('title', 'Daftar Online')

@section('home-active', 'active')

@section('content')

@include('layouts.users_navbar')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
    </div>

    <div class="row">
        <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <h5 class="card-title font-weight-middle">Alur Pendaftaran Online</h5>
                    <ol>
                        <li>Melakukan Pembayaran administrasi</li>
                        <li>Mengisi data pendataran melalui menu <a href="{{route('users.getDaftar')}}">Mendaftar</a></li>
                        <li>Menunggu pemberitahuan status pendaftaran (Lulus / Tidak)</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <h5 class="card-title font-weight-middle">Kontak Bantuan</h5>
                    <ol>
                        <li>
                            Iksan Mashudi - 085722221614 (Pondok Pesantren)
                            <a href="https://wa.me/+6285722221614" class="ml-2" target="_blank">
                                <button type="button" class="btn btn-success btn-sm py-0">
                                    <span class="icon">
                                        <i class="bi bi-whatsapp"></i>
                                    </span>
                                </button>
                            </a>
                        </li>
                        <li>
                            Ira Triyani - 085659493333 (MA Nuurul Hudaa)
                            <a href="https://wa.me/+6285659493333" class="ml-2" target="_blank">
                                <button type="button" class="btn btn-success btn-sm py-0">
                                    <span class="icon">
                                        <i class="bi bi-whatsapp"></i>
                                    </span>
                                </button>
                            </a>
                        </li>
                        <li>
                            Righad Salafaein - (MA Nuurul Hudaa)
                            <a href="" class="ml-2" target="_blank">
                                <button type="button" class="btn btn-success btn-sm py-0">
                                    <span class="icon">
                                        <i class="bi bi-whatsapp"></i>
                                    </span>
                                </button>
                            </a>
                        </li>
                        <li>
                            Saepul Yakin - (Tata Usaha)
                            <a href="https://wa.me/+6281294747934" class="ml-2" target="_blank">
                                <button type="button" class="btn btn-success btn-sm py-0">
                                    <span class="icon">
                                        <i class="bi bi-whatsapp"></i>
                                    </span>
                                </button>
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

@if (($users->status_pembayaran) == 'belum')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Silahkan Lakukan Pembayaran dan Konfirmasi Ke No di bawah</h1>
    </div>
    <div class="row">
        <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <h5 class="card-title font-weight-middle">Lakukan Pembayaran Melalui Kode QR atau no Rekening dibawah</h5>
                    <ol>
                        <li>081521993 - BRI A/N Iksan Mashudi</li>
                        <img src="{{asset('global/img/asset/flowcode.png')}}" width="360px" style="padding-left: 100px" alt="">
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <h5 class="card-title font-weight-middle">Konfirmasi Pembayaran</h5>
                    <ol>
                        <li>
                            Saepul Yakin - (Tata Usaha)
                            <a href="" class="ml-2" target="_blank">
                                <button type="button" class="btn btn-success btn-sm py-0">
                                    <span class="icon">
                                        <i class="bi bi-whatsapp"></i>
                                    </span>
                                </button>
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
