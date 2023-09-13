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
                                class="font-weight-semibold">{{ $menu }}</span>
                            @if ($submenu)
                                -
                                {{ $submenu }}
                            @endif
                        </h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="{{ url('dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                                Home</a>
                            <a href="{{ route('jenis_usaha.index') }}" class="breadcrumb-item">{{ $menu }}</a>
                            @if ($submenu)
                                <span class="breadcrumb-item active">{{ $submenu }}</span>
                            @endif
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i
                                class="icon-more"></i></a>
                    </div>


                </div>
            </div>
            <!-- /page header -->

            <!-- Content area -->
            <div class="content">

                <div class="col-12 mb-3">
                    <a href="{{ route('lokasi.create') }}"><button class="btn btn-primary rounded-round"><i
                                class="mr-2 icon-file-plus2"></i>Tambah Data</button></a>
                </div>

                <!-- Page length options -->
                <div class="card">`
                    <div class="card-body">
                        <table class="table datatable-basic tabelku">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lokasi</th>
                                    <th>Jenis Lokasi</th>
                                    <th>Alamat</th>
                                    <th>Contact Person</th>
                                    <th>Nomor Whatsapp</th>
                                    <th>Email</th>
                                    <th class="text-center">Aksi</th>
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
                    data: 'name',
                    name: 'name',
                },
                {
                    data: 'jenislokasinya.code_nm',
                    name: 'jenislokasinya.code_nm',
                },
                {
                    data: 'alamat',
                    name: 'alamat',
                },
                {
                    data: 'contact_person',
                    name: 'contact_person',
                },
                {
                    data: 'no_wa',
                    name: 'no_wa',
                },
                {
                    data: 'email',
                    name: 'email',
                },
                {
                    data: 'action',
                    className: "text-center"
                },
            ]
        });
    </script>
@endpush
