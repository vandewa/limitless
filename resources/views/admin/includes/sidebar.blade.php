<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">
    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <!-- <div class="sidebar-user">
                    <div class="card-body">
                        <div class="media">
                            <div class="mr-3">
                                <a href="#"><img
                                        src="{{ asset('limitless/global_assets/images/placeholders/placeholder.jpg') }}"
                                        width="38" height="38" class="rounded-circle" alt=""></a>
                            </div>

                            <div class="media-body">
                                <div class="media-title font-weight-semibold"></div>
                                <div class="font-size-xs opacity-50">
                                    <i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
                                </div>
                            </div>

                            <div class="ml-3 align-self-center">
                                <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu"
                        title="Main"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                <li
                    class="nav-item nav-item-submenu {{ Request::segment(2) == 'jenis_usaha' || Request::segment(2) == 'subsektor' || Request::segment(2) == 'pengguna' ? 'nav-item-expanded nav-item-open' : '' }} ">
                    <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Master</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="{{ route('pengguna.index') }}"
                                class="nav-link {{ Request::segment(2) == 'pengguna' ? 'active' : '' }}">Data
                                Pengguna</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('subsektor.index') }}"
                                class="nav-link {{ Request::segment(2) == 'subsektor' ? 'active' : '' }}">
                                Subsektor</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('jenis_usaha.index') }}"
                                class="nav-link {{ Request::segment(2) == 'jenis_usaha' ? 'active' : '' }}">
                                Usaha Pariwisata
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('ekraf.index') }}"
                        class="nav-link {{ Request::segment(2) == 'ekraf' ? 'active' : '' }}">
                        <i class="icon-store2"></i>
                        <span>
                            Data Ekraf
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('desa-wisata.index') }}"
                        class="nav-link {{ Request::segment(2) == 'desa-wisata' ? 'active' : '' }}">
                        <i class="icon-theater"></i>
                        <span>
                            Desa Wisata
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('lokasi.index') }}"
                        class="nav-link {{ Request::segment(2) == 'lokasi' || Request::segment(1) == 'kunjungan-wisata' ? 'active' : '' }}">
                        <i class="icon-location4"></i>
                        <span>
                            Destinasi Wisata
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pelaku.pelaku-wisata.index') }}"
                        class="nav-link {{ Request::segment(2) == 'pelaku-wisata' ? 'active' : '' }}">
                        <i class="icon-users"></i>
                        <span>
                            Pelaku Wisata Perorangan
                        </span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->