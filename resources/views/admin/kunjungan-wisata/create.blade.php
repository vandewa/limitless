@extends('layouts/front')
@section('content')
<div class="preloader">
    <img class="preloader__image" width="60" src="{{ asset('logo.png')}}" alt="" />
</div>

<!-- /.preloader -->
<div class="page-wrapper">

    <header class="main-header main-header--two clearfix">

        <div class="main-header--two__top clearfix">
            <div class="container">
                <div class="main-header--two__top-inner clearfix">
                    <div class="main-header--two__top-right clearfix">
                        <div class="main-header--two__top-right-login-register">
                            <ul class="list-unstyled">
                                <li><a href="{{ route('login') }}">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-header-two__bottom">
            <div class="container">
                <div class="main-header-two__bottom-inner clearfix">
                    <nav class="main-menu main-menu--1">
                        <div class="main-menu__inner">
                            <div class="left">
                                <div class="logo-box1">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('logo-disparbud-hitam.png')}}" alt="" width="400px;">
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        </div>
                    </nav>

                </div>
            </div>
        </div>

    </header>


    <div class="stricky-header stricky-header--two stricked-menu main-menu">
        <div class="sticky-header__content">

        </div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Start Categories Two-->
    <section class="categories-two">
    </section>
    <!--End Categories Two-->

    <!--Courses One Start-->
    <section class="courses-one">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title__title">Jumlah Kunjungan</h2>
            </div>

            <div class="mt-2">
                <div class="row font-size-sm">
                    <div class="col-md-6">
                        <div class="row mb-2">
                            <div class="col-md-3">Nama</div>
                            <div class="col-md-9">: {{ $lokasi->name }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Jenis Lokasi</div>
                            <div class="col-md-9">: {{ $lokasi->lokasi_wisata_tp }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Alamat</div>
                            <div class="col-md-9">: {{ $lokasi->alamat }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-2">
                            <div class="col-md-3">CP</div>
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
            </div>

            {!! Form::open(['route' => "kunjungan-wisata.create", "class" => "mt-3"]) !!}
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tahun:</label>
                        {{ Form::text('telepon', null, ['class' => 'form-control',
                        'placeholder' => 'Masukkan Nomor Telepon']) }}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Bulan:</label>
                        {{ Form::email('email', null, ['class' => 'form-control',
                        'placeholder' => 'Masukkan Email']) }}
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Jumlah Kunjungan:</label>
                        {{ Form::text('website', null, ['class' => 'form-control',
                        'placeholder' => 'desa-wisata.com']) }}
                    </div>
                </div>
            </div>


            {!! Form::close() !!}

        </div>
    </section>
    <!--Courses One End-->

    <footer class="fixed-bottom" style="background:black;right: 0;text-align: center;padding: 7px;color: #ffffff;font-size: 14px;border-top: 1px solid rgb(255 255 255 / 15%);">
        <p>&copy; Copyright 2023. Dinas Pariwisata dan Kebudayaan Kabupaten Wonosobo</p>
   </footer>


</div><!-- /.page-wrapper -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="{{ asset('logo-disparbud.png')}}"
                    width="280" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="icon-user"></i>
                <a href="{{ route('login') }}">Login</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

@endsection
