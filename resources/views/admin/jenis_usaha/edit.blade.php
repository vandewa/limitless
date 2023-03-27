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

                  
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <div class="row">
                <div class="col-md-4">

                    <!-- Left and right buttons -->
                    <div class="card">
                        <div class="card-body">
                            {{ Form::model($data, ['route' => ['jenis_usaha.update', $data->id], 'method' => 'PUT']) }}
                            <div class="form-group">
                                <label>Jenis Usaha:</label>
                                {{ Form::text('jenis_usaha', null, ['class' => 'form-control',
                                'placeholder' => 'Masukkan Jenis Usaha']) }}
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
@endpush