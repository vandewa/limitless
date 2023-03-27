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
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="{{ route('jenis_usaha.index') }}" class="breadcrumb-item">{{ $menu }}</a>
                        <span class="breadcrumb-item active">{{ $submenu }}</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                  
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            <div class="col-12 mb-3">
                <a href="{{ route('ekraf.create') }}"><button class="btn btn-primary rounded-round"><i class="mr-2 icon-file-plus2"></i>Tambah Data</button></a>
            </div>

            <!-- Page length options -->
            <div class="card">`
                <div class="card-body">
                    <table class="table datatable-basic tabelku">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Usaha</th>
                                <th>Pemilik</th>
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
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false, className: "text-left" },
            { data: 'nama_pemilik', name: 'nama_pemilik',  },
            { data: 'nama_usaha', name: 'jenis_usaha',  },
            { data: 'action', className: "text-center" },
        ]
    });
</script>
@endpush