@extends('admin.layouts.app')
@section('content')
    <!-- Page content -->
    <div class="page-content">
        @include('admin.includes.sidebar')

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        <h4><i class="icon-arrow-left52 mr-2"></i> <span
                                class="font-weight-semibold">{{ $menu }}</span> -
                            {{ $submenu }}</h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none">
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-link btn-float text-default"><i
                                    class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                            <a href="#" class="btn btn-link btn-float text-default"><i
                                    class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                            <a href="#" class="btn btn-link btn-float text-default"><i
                                    class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                        </div>
                    </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <a href="{{ route('jenis_usaha.index') }}" class="breadcrumb-item">{{ $menu }}</a>
                            <span class="breadcrumb-item active">{{ $submenu }}</span>
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i
                                class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none">
                        <div class="breadcrumb justify-content-center">
                            <a href="#" class="breadcrumb-elements-item">
                                <i class="icon-comment-discussion mr-2"></i>
                                Support
                            </a>

                            <div class="breadcrumb-elements-item dropdown p-0">
                                <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-gear mr-2"></i>
                                    Settings
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account
                                        security</a>
                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                    <a href="#" class="dropdown-item"><i class="icon-accessibility"></i>
                                        Accessibility</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">


                <!-- Page length options -->
                <div class="card">
                    <div class="card-body">

                        <div class="row font-size-lg">
                            <div class="col-md-6">
                                <div class="row mb-2">
                                    <div class="col-md-3">Nama</div>
                                    <div class="col-md-9">: {{ $lokasi->name }}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3">Jenis Lokasi</div>
                                    <div class="col-md-9">: {{ $lokasi->jenislokasinya->code_nm }}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3">Alamat</div>
                                    <div class="col-md-9">: {{ $lokasi->alamat }}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-2">
                                    <div class="col-md-3">Contact Person</div>
                                    <div class="col-md-9">: {{ $lokasi->contact_person }}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3">Email</div>
                                    <div class="col-md-9">: {{ $lokasi->email }}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3">No Wa</div>
                                    <div class="col-md-9">: {{ $lokasi->no_wa }}</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('kunjungan-wisata.create', ['lokasi_id' => $lokasi->id, 'tahun' => date('Y'), 'bulan' => (int) date('m')]) }}"
                            target="_blank" class="btn btn-dark mr-2">Penyisihan Data</a>
                        <a href='https://wa.me/{{ konversi_nomor($lokasi->no_wa) }}?text=Yth. Bapak/Ibu {{ '*' . $lokasi->contact_person . '*' }} pengelola wisata {{ '*' . $lokasi->name . '*' }}.%0D%0ASilahkan melaporkan jumlah kunjungan bulan {{ get_bulan(date('m')) }} dengan klik pada tautan dibawah ini:%0D%0A%0D%0A{{ url('/kunjungan-wisata/create?lokasi_id=' . $lokasi->id . '%26tahun=' . date('Y') . '%26bulan=' . date('m')) }}%0D%0A%0D%0ATerima Kasih.'
                            class="btn btn-info" target="_blank">Kirim WhatsApp</a>
                        <hr>
                        <table class="table datatable-basic tabelku">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tahun</th>
                                    <th>Bulan</th>
                                    <th>Jumlah Kunjungan</th>

                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>
                <!-- /page length options -->

            </div>
            <!-- /main content -->

            @include('admin.includes.footer')

        </div>
        <!-- /page content -->
    </div>
@endsection
@push('after-script')
    <script type="text/javascript">
        var table = $('.tabelku').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                    className: "text-left"
                },
                {
                    data: 'tahun',
                    name: 'tahun'
                },
                {
                    data: 'bulan',
                    name: 'bulan'
                },
                {
                    data: 'kunjungan',
                    name: 'kunjungan'
                },
            ]
        });
    </script>
@endpush
