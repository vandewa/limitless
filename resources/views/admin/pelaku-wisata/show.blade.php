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
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">{{ $menu }}</span> -
                        {{ $submenu }}</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{ url('dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                            Home</a>
                        <a href="{{ route('ekraf.index') }}" class="breadcrumb-item">{{ $menu }}</a>
                        <span class="breadcrumb-item">{{ $submenu }}</span>
                        <span class="breadcrumb-item active">{{ $title }}</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">{{ $title }}</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <x-detail-pelaku-wisata :id="$data->id" />
                </div>
            </div>

            <!-- Inner container -->
            <div class="d-md-flex align-items-md-start">

                <!-- Left sidebar component -->
                <div
                    class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left wmin-300 border-0 shadow-0 sidebar-expand-md">

                    <!-- Sidebar content -->
                    <div class="sidebar-content">

                        <!-- Navigation -->
                        <div class="card">
                            <div class="card-body p-0">
                                <ul class="nav nav-sidebar mb-2">
                                    <li class="nav-item-header">Navigation</li>
                                    <li class="nav-item">
                                        <a href="#profile" class="nav-link @if(session('biaya')) active @endif"
                                            data-toggle="tab">
                                            <i class="icon-coins"></i>
                                            Biaya Produksi
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#schedule" class="nav-link @if(session('omzet')) active @endif"
                                            data-toggle="tab">
                                            <i class="icon-cash3"></i>
                                            Omzet
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#inbox" class="nav-link @if(session('pajak')) active @endif"
                                            data-toggle="tab">
                                            <i class="icon-coin-dollar"></i>
                                            Pajak
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#certificate"
                                            class="nav-link @if(session('certificate')) active @endif"
                                            data-toggle="tab">
                                            <i class="icon-certificate"></i>
                                            Sertifikat
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /navigation -->
                    </div>
                    <!-- /sidebar content -->

                </div>
                <!-- /left sidebar component -->


                <!-- Right content -->
                <div class="tab-content w-100 overflow-auto">
                    <div class="tab-pane @if(session('biaya')) active show @endif" id="profile">

                        <x-biaya-produksi :produksi="$data->id" route="pelaku.biaya.store" />

                    </div>

                    <div class="tab-pane fade @if(session('omzet')) active show @endif" id="schedule">

                        <x-omzet :omzet="$data->id" route="pelaku.omzet.store" />

                    </div>

                    <div class="tab-pane fade  @if(session('pajak')) active show @endif" id="inbox">

                        <x-pajak :pajak="$data->id" route="pelaku.pajak.store" />

                    </div>

                    <div class="tab-pane fade  @if(session('certificate')) active show @endif" id="certificate">

                        <x-certificate :certificate="$data->id" route="pelaku.certificate.store" />

                    </div>

                </div>
                <!-- /right content -->

            </div>
            <!-- /inner container -->
        </div>
        <!-- /main content -->

        @include('admin.includes.footer')

    </div>
    <!-- /page content -->
</div>
@endsection

@push('after-script')
<script type="text/javascript">

    var table = $('.produksi').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: "{{ route('pelaku.biaya.index', ['ekraf_id' => Request::segment(3)]) }}",
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false, className: "text-left" },
            { data: 'tahun', name: 'tahun', },
            { data: 'biaya_produksi', name: 'biaya_produksi', orderable: false, searchable: false },
            { data: 'action', className: "text-center", orderable: false, searchable: false },
        ]
    });

    var table = $('.omzet').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: "{{ route('pelaku.omzet.index') }}",
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false, className: "text-left" },
            { data: 'tahun', name: 'tahun', },
            { data: 'omzet', name: 'omzet', orderable: false, searchable: false },
            { data: 'action', className: "text-center", orderable: false, searchable: false },
        ]
    });

    var table = $('.pajak').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: "{{ route('pelaku.pajak.index') }}",
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false, className: "text-left" },
            { data: 'tahun', name: 'tahun', },
            { data: 'pajak', name: 'pajak', orderable: false, searchable: false },
            { data: 'action', className: "text-center", orderable: false, searchable: false },
        ]
    });

    var table = $('.tabelku').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false, className: "text-left" },
            { data: 'nama_pemilik', name: 'nama_pemilik', },
            { data: 'nama_usaha', name: 'jenis_usaha', },
            { data: 'action', className: "text-center" },
        ]
    });

    var table = $('.certificate').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: "{{ route('certificate.list', $data->id) }}",
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false, className: "text-left" },
            { data: 'tanggal', name: 'tanggal'},
            { data: 'jenis_sertifikat.code_nm', name: 'jenisSertifikat.code_nm'},
            { data: 'nama', name: 'nama', },
            { data: 'lembaga', name: 'lembaga', },
            { data: 'action', className: "text-center" },
        ]
    });

</script>

@endpush

@push('after-script')
{!! JsValidator::formRequest('App\Http\Requests\BiayaProduksiPelakuStoreValidation', '#biaya')!!}
{!! JsValidator::formRequest('App\Http\Requests\OmzetStorePelakuValidation', "#omzet")!!}
{!! JsValidator::formRequest('App\Http\Requests\PajakStorePelakuValidation', "#pajak")!!}
@endpush