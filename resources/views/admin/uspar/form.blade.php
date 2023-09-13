<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold">{{ $subsubmenu }}</legend>

    <div class="form-group row">
        <div class="col-lg-6">
            <label>Jenis Usaha Pariwisata</label>
            {!! Form::select('master_data_usaha_pariwisata_id', $jup, null, ['class' => 'form-control',
            'placeholder' => 'Jenis Usaha Pariwisata']) !!}
        </div>
        <div class="col-lg-6">
            <label>Nama Usaha Pariwisata</label>
            {!! Form::text('nama_usaha', null, ['class' => 'form-control',
            'placeholder' => 'Nama Usaha Pariwisata']) !!}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <label>Nama Pemilik Usaha Pariwisata</label>
            {!! Form::text('nama_pemilik', null, ['class' => 'form-control',
            'placeholder' => 'Nama Pemilik Usaha Pariwisata']) !!}
        </div>
        <div class="col-lg-6">
            <label>Alamat Usaha Pariwisata</label>
            {!! Form::text('alamat', null, ['class' => 'form-control',
            'placeholder' => 'Alamat Usaha Pariwisata']) !!}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <label>No Telepon</label>
            {!! Form::number('no_telp', null, ['class' => 'form-control',
            'placeholder' => 'No Telepon']) !!}
        </div>
        <div class="col-lg-6">
            <label>Jumlah Tenaga Laki - Laki</label>
            {!! Form::number('tenaga_l', null, ['class' => 'form-control',
            'placeholder' => 'Jumlah Tenaga Laki - Laki']) !!}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <label>Jumlah Tenaga Perempuan</label>
            {!! Form::number('tenaga_p', null, ['class' => 'form-control',
            'placeholder' => 'Jumlah Tenaga Perempuan']) !!}
        </div>
        <div class="col-lg-6">
            <label>Izin Usaha Pariwisata</label>
            {!! Form::text('izin_dimiliki', null, ['class' => 'form-control',
            'placeholder' => 'xxx/xxx/xxx']) !!}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <label>Asosiasi</label>
            {!! Form::text('asosiasi', null, ['class' => 'form-control',
            'placeholder' => 'Contoh (PHRI)']) !!}
        </div>
    </div>
</fieldset>

<div class="d-flex justify-content-between align-items-center">
    <a class="btn btn-light" href="{{ url('master/uspar') }}">Kembali</a>
    <button type="submit" class="btn bg-blue">Simpan <i class="icon-paperplane ml-2"></i></button>
</div>