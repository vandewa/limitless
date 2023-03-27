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
                                        <img src="{{ asset('logo-disparbud.png')}}" alt="" width="400px;">
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

    <section class="main-slider main-slider-two">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>

            <div class="swiper-wrapper">
                <!--Start Single Swiper Slide-->
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url(http://ekraf.disporapar.jatengprov.go.id/banner/hu7cC9WOkA1tl2bqxegYIn6Da5QRysmf.png);"></div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider-two__content text-center">
                                    <h2 class="main-slider-two__tagline">Learn Anything Online</h2>
                                    <h2 class="main-slider__title">Online Study is Now <br>Much Easier</h2>
                                </div>
                                <div class="main-slider-two__button-box text-center">
                                    <a href="#" class="thm-btn">Discover more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Swiper Slide-->
              

            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-pagination" id="main-slider-pagination"></div>
        </div>
    </section>



    <!--Start Categories Two-->
    <section class="categories-two">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title__title">Kategori</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="categories-two__inner">
                        <div class="shape1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms"><img
                                src="{{ asset('zilom/files/assets/images/shapes/thm-shape4.png')}}" alt="" /></div>
                        <ul class="categories-two__wrapper list-unstyled">
                            <!--Start Single Categories Two-->
                            <li class="categories-two__single text-center wow fadeInUp animated animated"
                                data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="categories-two__single-icon">
                                    <span class="icon-creativity"></span>
                                    <div class="count">
                                        <h5>30</h5>
                                    </div>
                                    <div class="overly-bg"
                                        style="background-image: url({{ asset('zilom/files/assets/images/resources/categories-v2-overlay-img.png')}});">
                                    </div>
                                </div>
                                <div class="categories-two__single-text">
                                    <h5><a href="#">Art & Design</a></h5>
                                    <p>46 hours course time</p>
                                </div>
                            </li>
                            <!--End Single Categories Two-->

                            <!--Start Single Categories Two-->
                            <li class="categories-two__single text-center wow fadeInUp animated animated"
                                data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="categories-two__single-icon">
                                    <span class="icon-needs"></span>
                                    <div class="count">
                                        <h5>30</h5>
                                    </div>
                                    <div class="overly-bg"
                                        style="background-image: url({{ asset('zilom/files/assets/images/resources/categories-v2-overlay-img.png')}});">
                                    </div>
                                </div>
                                <div class="categories-two__single-text">
                                    <h5><a href="#">Lifestyle</a></h5>
                                    <p>46 hours course time</p>
                                </div>
                            </li>
                            <!--End Single Categories Two-->

                            <!--Start Single Categories Two-->
                            <li class="categories-two__single text-center wow fadeInUp animated animated"
                                data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="categories-two__single-icon">
                                    <span class="icon-photo-camera"></span>
                                    <div class="count">
                                        <h5>30</h5>
                                    </div>
                                    <div class="overly-bg"
                                        style="background-image: url({{ asset('zilom/files/assets/images/resources/categories-v2-overlay-img.png')}});">
                                    </div>
                                </div>
                                <div class="categories-two__single-text">
                                    <h5><a href="#">Photography</a></h5>
                                    <p>46 hours course time</p>
                                </div>
                            </li>
                            <!--End Single Categories Two-->

                            <!--Start Single Categories Two-->
                            <li class="categories-two__single text-center wow fadeInUp animated animated"
                                data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="categories-two__single-icon">
                                    <span class="icon-target"></span>
                                    <div class="count">
                                        <h5>30</h5>
                                    </div>
                                    <div class="overly-bg"
                                        style="background-image: url({{ asset('zilom/files/assets/images/resources/categories-v2-overlay-img.png')}});">
                                    </div>
                                </div>
                                <div class="categories-two__single-text">
                                    <h5><a href="#">Marketing</a></h5>
                                    <p>46 hours course time</p>
                                </div>
                            </li>
                            <!--End Single Categories Two-->

                            <!--Start Single Categories Two-->
                            <li class="categories-two__single text-center wow fadeInUp animated animated"
                                data-wow-delay="800ms" data-wow-duration="1500ms">
                                <div class="categories-two__single-icon">
                                    <span class="icon-desk"></span>
                                    <div class="count">
                                        <h5>30</h5>
                                    </div>
                                    <div class="overly-bg"
                                        style="background-image: url({{ asset('zilom/files/assets/images/resources/categories-v2-overlay-img.png')}});">
                                    </div>
                                </div>
                                <div class="categories-two__single-text">
                                    <h5><a href="#">Business</a></h5>
                                    <p>46 hours course time</p>
                                </div>
                            </li>
                            <!--End Single Categories Two-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Categories Two-->

    <!--Courses One Start-->
    <section class="courses-one">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title__title">Subsektor</h2>
            </div>
            <div class="row">
                @foreach ($subsektor as $sub)
                <!--Start Single Courses One-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                    data-wow-duration="1000ms">
                    <a href="{{ route('list.subsektor', $sub->id) }}">
                    <div class="courses-one__single">
                        <div class="courses-one__single-img">
                            <img src="{{ asset($sub->icons)}}" alt="" height="200" style="object-fit: cover;"/>
                            <div class="overlay-text">
                                <p>{{ $sub->nama_subsektor }}</p>
                            </div>
                        </div>
                        <div class="courses-one__single-content">
                            <h4 class="courses-one__single-content-title">
                                <a href="{{ route('list.subsektor', $sub->id) }}">
                                   <center> {{ $sub->nama_subsektor }}</center> 
                                </a>
                            </h4>
                        </div>
                    </div>
                    </a>
                </div>
                <!--End Single Courses One-->
                @endforeach
            </div>
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