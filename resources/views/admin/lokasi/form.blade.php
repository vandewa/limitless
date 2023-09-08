<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold">{{ $subsubmenu }}</legend>

    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label">Nama Lokasi</label>
            {!! Form::text('name', null, ['class' => 'form-control',
            'placeholder' => 'Masukkan Nama Lokasi']) !!}
        </div>
        <div class="col-6">
            <label class="col-form-label">Jenis Lokasi</label>
            {!! Form::select('lokasi_wisata_tp', get_code_group('LOKASI_WISATA_TP'),null, ['class' => 'form-control
            select-search',
            'placeholder' => 'Silahkan Pilih'])
            !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label">Alamat Lokasi</label>
            {!! Form::text('alamat', null, ['class' => 'form-control',
            'placeholder' => 'Alamat Lokasi']) !!}
        </div>
        <div class="col-6">
            <label class="col-form-label">Contact Person</label>
            {!! Form::text('contact_person', null, ['class' => 'form-control',
            'placeholder' => 'Contact Person']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label">Nomor Whatsapp</label>
            {!! Form::text('no_wa', null, ['class' => 'form-control',
            'placeholder' => 'Nomor Whatsapp']) !!}
        </div>
        <div class="col-6">
            <label class="col-form-label">Email</label>
            {!! Form::text('email', null, ['class' => 'form-control',
            'placeholder' => 'Email']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label">Harga Tiket</label>
            {!! Form::text('harga_tiket', null, ['class' => 'form-control',
            'placeholder' => 'Harga Tiket']) !!}
        </div>
        <div class="col-6">
            <label class="col-form-label">Jam Operasional</label>
            {!! Form::text('jam_operasional', null, ['class' => 'form-control',
            'placeholder' => 'Jam Operasional']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <div class="form-group mb-3 mb-md-2">
                <label class="d-block">Website</label>
                <x-radio ah="website" />
            </div>
        </div>
        <div class="col-6">
            <label class="d-block">Pemandu Bersertifikat</label>
            <x-radio ah="pemandu_bersertifikat" />
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <div class="form-group mb-3 mb-md-2">
                <label class="d-block">Toilet</label>
                <x-radio ah="toilet" />
            </div>
        </div>
        <div class="col-6">
            <label class="d-block">Tempat Ibadah</label>
            <x-radio ah="tempat_ibadah" />
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <div class="form-group mb-3 mb-md-2">
                <label class="d-block">Penginapan</label>
                <x-radio ah="penginapan" />
            </div>
        </div>
        <div class="col-6">
            <label class="d-block">Warung Makan</label>
            <x-radio ah="warung_makan" />
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <div class="form-group mb-3 mb-md-2">
                <label class="d-block">Toko Cinderamata</label>
                <x-radio ah="toko_cinderamata" />
            </div>
        </div>
        <div class="col-6">
            <label class="d-block">Area Parkir</label>
            <x-radio ah="area_parkir" />
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <div class="form-group mb-3 mb-md-2">
                <label class="d-block">Facebook</label>
                {!! Form::text('fb', null, ['class' => 'form-control',
                'placeholder' => 'Alamat Facebook']) !!}
            </div>
        </div>
        <div class="col-6">
            <label class="d-block">Instagram</label>
            {!! Form::text('ig', null, ['class' => 'form-control',
            'placeholder' => 'Alamat Instagram']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <div class="form-group mb-3 mb-md-2">
                <label class="d-block">TikTok</label>
                {!! Form::text('tiktok', null, ['class' => 'form-control',
                'placeholder' => 'Alamat TikTok']) !!}
            </div>
        </div>
        <div class="col-6">
            <label class="d-block">YouTube</label>
            {!! Form::text('youtube', null, ['class' => 'form-control',
            'placeholder' => 'Alamat Youtube']) !!}
        </div>
    </div>

</fieldset>

<div class="d-flex justify-content-between align-items-center">
    <a class="btn btn-light" href="{{ url('master/lokasi') }}">Kembali</a>
    <button type="submit" class="btn bg-blue">Simpan <i class="icon-paperplane ml-2"></i></button>
</div>