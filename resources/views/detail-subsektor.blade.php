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
                <h2 class="section-title__title">{{ $judul->nama_subsektor ?? $judul->jenis_usaha }}</h2>
                @if(Request::segment(1) == 'list-uspar')
                <h4>Total Usaha : {{ count($subsektor) }}</h4>
                <h4>Jumlah Serapan Tenaga Kerja : {{ $subsektor->sum('tenaga_l') + $subsektor->sum('tenaga_p') }}</h4>
                @endif
            </div>
            <div class="row">
                @foreach ($subsektor as $sub)
                <!--Start Single Courses One-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="courses-one__single">
                        <div class="courses-one__single-content">
                            <div class="courses-one__single-content-overlay-img">
                                <img src="assets/images/resources/courses-v1-overlay-img1.png" alt="" />
                            </div>
                            <h4 class="courses-one__single-content-title">
                                {{ $sub->ekrafnya->nama_usaha ?? $sub->nama_usaha }}
                            </h4>
                            <ul class="courses-one__single-content-courses-info list-unstyled">
                                <li>{{ $sub->ekrafnya->nama_pemilik ?? $sub->nama_pemilik }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Single Courses One-->
                @endforeach
            </div>
        </div>
    </section>
    <!--Courses One End-->

    <footer class="fixed-bottom"
        style="background:black;right: 0;text-align: center;padding: 7px;color: #ffffff;font-size: 14px;border-top: 1px solid rgb(255 255 255 / 15%);">
        <p>&copy; Copyright 2023. Dinas Pariwisata dan Kebudayaan Kabupaten Wonosobo</p>
    </footer>


</div><!-- /.page-wrapper -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="{{ asset('logo-disparbud.png')}}" width="280"
                    alt="" /></a>
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