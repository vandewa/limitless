<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold">{{ $subsubmenu }}</legend>

    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label">Nama Lokasi</label>
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Lokasi']) !!}
        </div>
        <div class="col-6">
            <label class="col-form-label">Jenis Lokasi</label>
            {!! Form::select('lokasi_wisata_tp', get_code_group('LOKASI_WISATA_TP'), null, [
                'class' => 'form-control
                                                                                                                                                                                                                                    select-search',
                'placeholder' => 'Silahkan Pilih',
            ]) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label">Alamat Lokasi</label>
            {!! Form::text('alamat', null, ['class' => 'form-control', 'placeholder' => 'Alamat Lokasi']) !!}
        </div>
        <div class="col-6">
            <label class="col-form-label">Contact Person</label>
            {!! Form::text('contact_person', null, ['class' => 'form-control', 'placeholder' => 'Contact Person']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label">Nomor Whatsapp</label>
            {!! Form::text('no_wa', null, ['class' => 'form-control', 'placeholder' => 'Nomor Whatsapp']) !!}
        </div>
        <div class="col-6">
            <label class="col-form-label">Email</label>
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label">Harga Tiket</label>
            {!! Form::text('harga_tiket', null, ['class' => 'form-control', 'placeholder' => 'Harga Tiket']) !!}
        </div>
        <div class="col-6">
            <label class="col-form-label">Jam Operasional</label>
            {!! Form::text('jam_operasional', null, ['class' => 'form-control', 'placeholder' => 'Jam Operasional']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <label class="d-block">Website</label>
            {{-- <div class="form-group mb-3 mb-md-2">
                <label class="d-block">Website</label>
                <x-radio ah="website" />
            </div> --}}
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="website" value="1" id="a_website"
                    @if (Request::segment(3) != 'create') @if ($data->website == 1) checked @endif @endif>
                <label class="custom-control-label" for="a_website">Ada</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="website" value="0" id="b_website"
                    @if (Request::segment(3) != 'create') @if ($data->website == 0) checked @endif @endif>
                <label class="custom-control-label" for="b_website">Tidak Ada</label>
            </div>
        </div>
        <div class="col-6">
            <label class="d-block">Pemandu Bersertifikat</label>
            {{-- <x-radio ah="pemandu_bersertifikat" /> --}}
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="pemandu_bersertifikat" value="1"
                    id="a_pemandu_bersertifikat"
                    @if (Request::segment(3) != 'create') @if ($data->pemandu_bersertifikat == 1) checked @endif @endif>
                <label class="custom-control-label" for="a_pemandu_bersertifikat">Ada</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="pemandu_bersertifikat" value="0"
                    id="b_pemandu_bersertifikat"
                    @if (Request::segment(3) != 'create') @if ($data->pemandu_bersertifikat == 0) checked @endif @endif>
                <label class="custom-control-label" for="b_pemandu_bersertifikat">Tidak Ada</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <div class="form-group mb-3 mb-md-2">
                <label class="d-block">Toilet</label>
                {{-- <x-radio ah="toilet" /> --}}
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" name="toilet" value="1" id="a_toilet"
                        @if (Request::segment(3) != 'create') @if ($data->toilet == 1) checked @endif @endif>
                    <label class="custom-control-label" for="a_toilet">Ada</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" name="toilet" value="0" id="b_toilet"
                        @if (Request::segment(3) != 'create') @if ($data->toilet == 0) checked @endif
                        @endif>
                    <label class="custom-control-label" for="b_toilet">Tidak Ada</label>
                </div>
            </div>
        </div>
        <div class="col-6">
            <label class="d-block">Tempat Ibadah</label>
            {{-- <x-radio ah="tempat_ibadah" /> --}}
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="tempat_ibadah" value="1"
                    id="a_tempat_ibadah"
                    @if (Request::segment(3) != 'create') @if ($data->tempat_ibadah == 1) checked @endif @endif>
                <label class="custom-control-label" for="a_tempat_ibadah">Ada</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="tempat_ibadah" value="0"
                    id="b_tempat_ibadah"
                    @if (Request::segment(3) != 'create') @if ($data->tempat_ibadah == 0) checked @endif @endif>
                <label class="custom-control-label" for="b_tempat_ibadah">Tidak Ada</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <div class="form-group mb-3 mb-md-2">
                <label class="d-block">Penginapan</label>
                {{-- <x-radio ah="penginapan" /> --}}
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" name="penginapan" value="1"
                        id="a_penginapan"
                        @if (Request::segment(3) != 'create') @if ($data->penginapan == 1) checked @endif
                        @endif>
                    <label class="custom-control-label" for="a_penginapan">Ada</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" name="penginapan" value="0"
                        id="b_penginapan"
                        @if (Request::segment(3) != 'create') @if ($data->penginapan == 0) checked @endif
                        @endif>
                    <label class="custom-control-label" for="b_penginapan">Tidak Ada</label>
                </div>
            </div>
        </div>
        <div class="col-6">
            <label class="d-block">Warung Makan</label>
            {{-- <x-radio ah="warung_makan" /> --}}
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="warung_makan" value="1"
                    id="a_warung_makan"
                    @if (Request::segment(3) != 'create') @if ($data->warung_makan == 1) checked @endif @endif>
                <label class="custom-control-label" for="a_warung_makan">Ada</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="warung_makan" value="0"
                    id="b_warung_makan"
                    @if (Request::segment(3) != 'create') @if ($data->warung_makan == 0) checked @endif @endif>
                <label class="custom-control-label" for="b_warung_makan">Tidak Ada</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <div class="form-group mb-3 mb-md-2">
                <label class="d-block">Toko Cinderamata</label>
                {{-- <x-radio ah="toko_cinderamata" /> --}}
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" name="toko_cinderamata" value="1"
                        id="a_toko_cinderamata"
                        @if (Request::segment(3) != 'create') @if ($data->toko_cinderamata == 1) checked @endif
                        @endif>
                    <label class="custom-control-label" for="a_toko_cinderamata">Ada</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" name="toko_cinderamata" value="0"
                        id="b_toko_cinderamata"
                        @if (Request::segment(3) != 'create') @if ($data->toko_cinderamata == 0) checked @endif
                        @endif>
                    <label class="custom-control-label" for="b_toko_cinderamata">Tidak Ada</label>
                </div>
            </div>
        </div>
        <div class="col-6">
            <label class="d-block">Area Parkir</label>
            {{-- <x-radio ah="area_parkir" /> --}}
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="area_parkir" value="1"
                    id="a_area_parkir"
                    @if (Request::segment(3) != 'create') @if ($data->area_parkir == 1) checked @endif @endif>
                <label class="custom-control-label" for="a_area_parkir">Ada</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="area_parkir" value="0"
                    id="b_area_parkir"
                    @if (Request::segment(3) != 'create') @if ($data->area_parkir == 0) checked @endif @endif>
                <label class="custom-control-label" for="b_area_parkir">Tidak Ada</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <div class="form-group mb-3 mb-md-2">
                <label class="d-block">Facebook</label>
                {!! Form::text('fb', null, ['class' => 'form-control', 'placeholder' => 'Alamat Facebook']) !!}
            </div>
        </div>
        <div class="col-6">
            <label class="d-block">Instagram</label>
            {!! Form::text('ig', null, ['class' => 'form-control', 'placeholder' => 'Alamat Instagram']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <div class="form-group mb-3 mb-md-2">
                <label class="d-block">TikTok</label>
                {!! Form::text('tiktok', null, ['class' => 'form-control', 'placeholder' => 'Alamat TikTok']) !!}
            </div>
        </div>
        <div class="col-6">
            <label class="d-block">YouTube</label>
            {!! Form::text('youtube', null, ['class' => 'form-control', 'placeholder' => 'Alamat Youtube']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <div class="form-group mb-3 mb-md-2">
                <label class="d-block">Latitude</label>
                {!! Form::text('lat', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Latitude Lokasi']) !!}
            </div>
        </div>
        <div class="col-6">
            <label class="d-block">Longitude</label>
            {!! Form::text('long', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Longitude Lokasi']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <label class="d-block">NPWP</label>
            {!! Form::text('npwp', null, ['class' => 'form-control', 'placeholder' => 'Nomor NPWP']) !!}
        </div>
    </div>

</fieldset>

<div class="d-flex justify-content-between align-items-center">
    <a class="btn btn-light" href="{{ url('master/lokasi') }}">Kembali</a>
    <button type="submit" class="btn bg-blue">Simpan <i class="icon-paperplane ml-2"></i></button>
</div>
