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
                <div class="row">
                    <div class="col-md-12">

                        <!-- Left and right buttons -->
                        <div class="card">
                            <div class="card-body">
                                {{ Form::model($data, ['route' => ['desa-wisata.update', $data->id], 'method' => 'PUT']) }}
                                @include('admin.desa-wisata.form')
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

    <!-- Javascript Requirements -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\DesaWisataValidation', '#my-form') !!}
@endpush
