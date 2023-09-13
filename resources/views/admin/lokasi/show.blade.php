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
                        <a href="{{ url('dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                            Home</a>
                        <a href="{{ route('lokasi.index') }}" class="breadcrumb-item">{{ $menu }}</a>
                        <span class="breadcrumb-item active">{{ $submenu }}</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
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
                                <li class="nav-item"><a href="#basic-tab2" class="nav-link" data-toggle="tab">NIB</a>
                                </li>
                                <li class="nav-item"><a href="#basic-tab3" class="nav-link"
                                        data-toggle="tab">Sertifikat</a></li>
                                <li class="nav-item"><a href="#basic-tab4" class="nav-link"
                                        data-toggle="tab">Pelatihan</a></li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="basic-tab1">
                                    <table class="table-hover">
                                        <tbody>
                                            <tr>
                                                <td>Nama Destinasi Wisata</td>
                                                <td> : </td>
                                                <td>{{ $data->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tipe Lokasi Destinasi Wisata</td>
                                                <td> : </td>
                                                <td>{{ \App\Models\ComCode::where('code_cd',
                                                    $data->lokasi_wisata_tp)->pluck('code_nm')->last(); }}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td> : </td>
                                                <td>{{ $data->alamat }}</td>
                                            </tr>
                                            <tr>
                                                <td>Kontak Personil</td>
                                                <td> : </td>
                                                <td>{{ $data->contact_person }}</td>
                                            </tr>
                                            <tr>
                                                <td>Nomor WA</td>
                                                <td> : </td>
                                                <td>{{ $data->no_wa }}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Email</td>
                                                <td> : </td>
                                                <td>{{ $data->email }}</td>
                                            </tr>
                                            <tr>
                                                <td>Harga Tiket</td>
                                                <td> : </td>
                                                <td>{{ $data->harga_tiket }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jam Operasional</td>
                                                <td> : </td>
                                                <td>{{ $data->jam_operasional }}</td>
                                            </tr>
                                            <tr>
                                                <td>Website</td>
                                                <td> : </td>
                                                <td>{{ ($data->website) ? 'Ada' : 'Tidak Ada' }}</td>
                                            </tr>
                                            <tr>
                                                <td>Pemandu Bersertifikat</td>
                                                <td> : </td>
                                                <td>{{ ($data->pemandu_bersertifikat) ? 'Ada' : 'Tidak Ada' }}</td>
                                            </tr>
                                            <tr>
                                                <td>Toilet</td>
                                                <td> : </td>
                                                <td>{{ ($data->toilet) ? 'Ada' : 'Tidak Ada' }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tempat Ibadah</td>
                                                <td> : </td>
                                                <td>{{ ($data->tempat_ibadah) ? 'Ada' : 'Tidak Ada' }}</td>
                                            </tr>
                                            <tr>
                                                <td>Penginapan</td>
                                                <td> : </td>
                                                <td>{{ ($data->penginapan) ? 'Ada' : 'Tidak Ada' }}</td>
                                            </tr>
                                            <tr>
                                                <td>Warung Makan</td>
                                                <td> : </td>
                                                <td>{{ ($data->warung_makan) ? 'Ada' : 'Tidak Ada' }}</td>
                                            </tr>
                                            <tr>
                                                <td>Toko Cinderamata</td>
                                                <td> : </td>
                                                <td>{{ ($data->toko_cinderamata) ? 'Ada' : 'Tidak Ada' }}</td>
                                            </tr>
                                            <tr>
                                                <td>Area Parkir</td>
                                                <td> : </td>
                                                <td>{{ ($data->area_parkir) ? 'Ada' : 'Tidak Ada' }}</td>
                                            </tr>
                                            <tr>
                                                <td>Facebook</td>
                                                <td> : </td>
                                                <td>{{ $data->fb }}</td>
                                            </tr>
                                            <tr>
                                                <td>Instagram</td>
                                                <td> : </td>
                                                <td>{{ $data->ig }}</td>
                                            </tr>
                                            <tr>
                                                <td>TikTok</td>
                                                <td> : </td>
                                                <td>{{ $data->tiktok }}</td>
                                            </tr>
                                            <tr>
                                                <td>YouTube</td>
                                                <td> : </td>
                                                <td>{{ $data->youtube }}</td>
                                            </tr>
                                            <tr>
                                                <td>Latitude</td>
                                                <td> : </td>
                                                <td>{{ $data->lat }}</td>
                                            </tr>
                                            <tr>
                                                <td>Longitude</td>
                                                <td> : </td>
                                                <td>{{ $data->long }}</td>
                                            </tr>
                                            <tr>
                                                <td>NPWP</td>
                                                <td> : </td>
                                                <td>{{ $data->npwp }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
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