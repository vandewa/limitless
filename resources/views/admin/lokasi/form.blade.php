<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold">{{ $subsubmenu }}</legend>

    <div class="form-group row">
        <label class="col-form-label col-lg-2">Nama Lokasi</label>
        <div class="col-lg-10">
            {!! Form::text('name', null, ['class' => 'form-control',
            'placeholder' => 'Masukkan Nama Lokasi']) !!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-2">Jenis Lokasi</label>
        <div class="col-lg-10">
            {!! Form::select('lokasi_wisata_tp', get_code_group('LOKASI_WISATA_TP'),null, ['class' => 'form-control',
            'placeholder' => 'Silahkan Pilih'])
            !!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-2">Alamat Lokasi</label>
        <div class="col-lg-10">
            {!! Form::text('alamat', null, ['class' => 'form-control',
            'placeholder' => 'Alamat Lokasi']) !!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-2">Contact Person</label>
        <div class="col-lg-10">
            {!! Form::text('contact_person', null, ['class' => 'form-control',
            'placeholder' => 'Contact Person']) !!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-2">Nomor Whatsapp</label>
        <div class="col-lg-10">
            {!! Form::text('no_wa', null, ['class' => 'form-control',
            'placeholder' => 'Nomor Whatsapp']) !!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-2">Email</label>
        <div class="col-lg-10">
            {!! Form::text('email', null, ['class' => 'form-control',
            'placeholder' => 'Email']) !!}
        </div>
    </div>

</fieldset>

<div class="d-flex justify-content-between align-items-center">
    <a class="btn btn-light" href="{{ url('master/lokasi') }}">Kembali</a>
    <button type="submit" class="btn bg-blue">Simpan <i class="icon-paperplane ml-2"></i></button>
</div>