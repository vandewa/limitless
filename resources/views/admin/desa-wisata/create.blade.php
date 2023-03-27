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
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Datatables</span> -
                        Advanced</h4>
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
                        <a href="{{ url('dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                            Dashboard</a>
                        <a href="#" class="breadcrumb-item">Master</a>
                        <a href="#" class="breadcrumb-item">Jenis Usaha</a>
                        <span class="breadcrumb-item active">Tambah Data</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
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
                                <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                                <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
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
            <div class="row">
                <div class="col">

                    <!-- Left and right buttons -->
                    <div class="card">
                        <div class="card-body">
                            {{ Form::open(['route' => 'desa-wisata.store', 'method' => 'POST']) }}
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Telepon:</label>
                                            {{Form::select('region_kec', get_kec(), null, ['class' => 'form-control select-search', 'placeholder' => 'Pilih Kecamatan', 'id' => 'kecamatan'])}}
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Telepon:</label>
                                    {{Form::select('region_kel',[], null, ['class' => 'form-control select-search', 'placeholder' => 'Pilih Kelurahan', 'id' => 'kelurahan'])}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Telepon:</label>
                                        {{ Form::text('telepon', null, ['class' => 'form-control',
                                        'placeholder' => 'Masukkan Nomor Telepon']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email:</label>
                                        {{ Form::email('email', null, ['class' => 'form-control',
                                        'placeholder' => 'Masukkan Email']) }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alamat Website:</label>
                                        {{ Form::text('website', null, ['class' => 'form-control',
                                        'placeholder' => 'desa-wisata.com']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tahun Dibentuk:</label>
                                        {{ Form::number('tahun_dibentuk', null, ['class' => 'form-control',
                                        'placeholder' => 'Tahun Desa Wisata dibentuk']) }}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Total Jumlah Pemandu:</label>
                                        {{ Form::number('jumlah_pemandu', null, ['class' => 'form-control',
                                        'placeholder' => 'Masukkan Jenis Usaha']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jumlah Pemandu Bersertifikat:</label>
                                        {{ Form::number('jumlah_pemandu_bersertifikat', null, ['class' => 'form-control',
                                        'placeholder' => 'Masukkan Jenis Usaha']) }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Latitude:</label>
                                        {{ Form::number('ltd', null, ['class' => 'form-control',
                                        'placeholder' => 'Masukkan Jenis Usaha']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Longitude:</label>
                                        {{ Form::number('lng', null, ['class' => 'form-control',
                                        'placeholder' => 'Masukkan Jenis Usaha']) }}
                                    </div>
                                </div>
                            </div>






                            <div class="d-flex justify-content-between align-items-center">
                                <a class="btn btn-light" href="{{ url('master/jenis_usaha') }}">Kembali</a>
                                <button type="submit" class="btn bg-blue">Simpan <i
                                        class="icon-paperplane ml-2"></i></button>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                    <!-- /left and right buttons -->

                </div>
            </div>
        </div>
        <!-- /main content -->

        @include('admin.includes.footer')

    </div>
    <!-- /page content -->
</div>
@endsection

@push('after-script')
<script>
    $('#kecamatan').change(function() {
       var kelurahan = $(this).val();
           $.ajax({
               type: "GET",
               url: "{{ route('kelurahan') }}?kelurahan=" + kelurahan,
               success: function(res) {
                    $("#kelurahan").empty();
                    $("#kelurahan").append('<option value="">Pilih Kelurahan</option>');
                    $.each(res, function(key, value) {
                        $("#kelurahan").append('<option value="' + key + '">' + value +
                            '</option>');
                    });
                }
           });
    });
</script>
@endpush
