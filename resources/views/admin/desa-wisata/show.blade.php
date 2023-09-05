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
                <div class="col-md-12">

                    <!-- Left and right buttons -->
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="#basic-tab1" class="nav-link active show"
                                        data-toggle="tab">Profile Desa</a></li>
                                <li class="nav-item"><a href="#basic-tab2" class="nav-link" data-toggle="tab">SK</a>
                                </li>
                                <li class="nav-item"><a href="#basic-tab3" class="nav-link"
                                        data-toggle="tab">Sertifikat</a></li>
                                <li class="nav-item"><a href="#basic-tab4" class="nav-link"
                                        data-toggle="tab">Pelatihan</a></li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="basic-tab1">
                                </div>
                                <div class="tab-pane fade" id="basic-tab2">
                                    <livewire:pages.desa.sk :desa="$data->id" />
                                </div>
                                <div class="tab-pane fade" id="basic-tab3">
                                    <livewire:pages.desa.sertifikat :desa="$data->id" />
                                </div>
                                <div class="tab-pane fade" id="basic-tab4">
                                    <livewire:pages.desa.pelatihan :desa="$data->id" />
                                </div>
                            </div>
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
    $('#kecamatan').change(function () {
        var kelurahan = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{ route('kelurahan') }}?kelurahan=" + kelurahan,
            success: function (res) {
                $("#kelurahan").empty();
                $("#kelurahan").append('<option value="">Pilih Kelurahan</option>');
                $.each(res, function (key, value) {
                    $("#kelurahan").append('<option value="' + key + '">' + value +
                        '</option>');
                });
            }
        });
    });
</script>

<!-- Javascript Requirements -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\DesaWisataValidation','#my-form') !!}
@endpush