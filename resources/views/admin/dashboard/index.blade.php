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
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> -
                        Dashboard</h4>
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
                        <span class="breadcrumb-item active">Dashboard</span>
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

            <!-- Main charts -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title">Statistik</h6>

                            <div class="header-elements">
                                <!-- <div><span class="badge badge-mark border-success mr-2"></span> Operational</div> -->
                            </div>
                        </div>

                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3">
                                    <div class="d-flex align-items-center mb-1">Total Data Ekraf <span
                                            class="text-muted ml-auto">{{
                                            App\Models\Ekraf::all()->count() }}</span></div>
                                    <div class="progress" style="height: 0.375rem;">
                                        <div class="progress-bar bg-info" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="mb-3">
                                    <div class="d-flex align-items-center mb-1">Total Data Usaha Pengguna <span
                                            class="text-muted ml-auto">{{
                                            App\Models\MasterDataUsahaPariwisata::all()->count() }}</span>
                                    </div>
                                    <div class="progress" style="height: 0.375rem;">
                                        <div class="progress-bar bg-danger" style="width: 70%">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="mb-3">
                                    <div class="d-flex align-items-center mb-1">Total Data Subsektor <span
                                            class="text-muted ml-auto">{{
                                            App\Models\Subsektor::all()->count() }}</span></div>
                                    <div class="progress" style="height: 0.375rem;">
                                        <div class="progress-bar bg-success" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex align-items-center mb-1">Total Data Pengguna <span
                                            class="text-muted ml-auto">{{ App\Models\user::all()->count() }}
                                        </span></div>
                                    <div class="progress" style="height: 0.375rem;">
                                        <div class="progress-bar bg-primary" style="width: 60%">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /main charts -->




        </div>
        <!-- /content area -->

        @include('admin.includes.footer')

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->
@endsection
@push('after-script')
@endpush