<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Jenis:</label>
            {{Form::select('jenis', get_code_group('JENIS_DESA_WISATA'), null, ['class'
            => 'form-control
            select-search', 'placeholder' => 'Pilih Jenis'])}}
        </div>
    </div>
    <div class="col-md-6">
        <label>Strata:</label>
        {{Form::select('strata', get_code_group('STRATA_DESA'), null, ['class' =>
        'form-control select-search',
        'placeholder' => 'Pilih Strata'])}}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Kecamatan:</label>
            {{Form::select('region_kec', get_kec(), null, ['class' => 'form-control
            select-search', 'placeholder' => 'Pilih Kecamatan', 'id' => 'kecamatan'])}}
        </div>
    </div>
    <div class="col-md-6">
        <label>Kelurahan:</label>
        @if(Request::segment(3) == 'create' )
        {{Form::select('region_kel',[], null, ['class' => 'form-control select-search',
        'placeholder' => 'Pilih Kelurahan', 'id' => 'kelurahan'])}}
        @else
        {{Form::select('region_kel', get_kel($data->region_kec), $data->region_kel, ['class' => 'form-control
        select-search',
        'placeholder' => 'Pilih Kelurahan', 'id' => 'kelurahan'])}}
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Telepon Pengelola:</label>
            {{ Form::text('telepon', null, ['class' => 'form-control',
            'placeholder' => 'Masukkan Nomor Telepon Pengelola']) }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Email:</label>
            {{ Form::email('email', null, ['class' => 'form-control',
            'placeholder' => 'Masukkan Email']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Nama Pengelola:</label>
            {{ Form::text('nama_pengelola', null, ['class' => 'form-control',
            'placeholder' => 'Masukkan Nama Pengelola']) }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Desa Wisata / Kampung Desa Wisata:</label>
            {{ Form::text('nama_desa', null, ['class' => 'form-control',
            'placeholder' => 'Masukkan Nama Desa Wisata / Kampung Desa Wisata']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Alamat Website:</label>
            {{ Form::text('website', null, ['class' => 'form-control',
            'placeholder' => 'desa-wisata.com']) }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Tahun Dibentuk:</label>
            {{ Form::number('tahun_dibentuk', null, ['class' => 'form-control',
            'placeholder' => 'Tahun Desa Wisata dibentuk']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Total Jumlah Pemandu:</label>
            {{ Form::number('jumlah_pemandu', null, ['class' => 'form-control',
            'placeholder' => 'Masukkan Jenis Usaha']) }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Jumlah Pemandu Bersertifikat:</label>
            {{ Form::number('jumlah_pemandu_bersertifikat', null, ['class' =>
            'form-control',
            'placeholder' => 'Masukkan Jenis Usaha']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Alamat Facebook:</label>
            {{ Form::number('fb', null, ['class' => 'form-control',
            'placeholder' => 'Masukkan Alamat Facebook']) }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Alamat Instagram:</label>
            {{ Form::number('ig', null, ['class' =>
            'form-control',
            'placeholder' => 'Masukkan Alamat Instagram']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Alamat TikTok:</label>
            {{ Form::number('tiktok', null, ['class' => 'form-control',
            'placeholder' => 'Masukkan Alamat TikTok']) }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Alamat Youtube:</label>
            {{ Form::number('youtube', null, ['class' =>
            'form-control',
            'placeholder' => 'Masukkan Alamat Youtube']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Latitude:</label>
            {{ Form::text('ltd', null, ['class' => 'form-control',
            'placeholder' => 'Masukkan Latitude Lokasi']) }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Longitude:</label>
            {{ Form::text('lng', null, ['class' => 'form-control',
            'placeholder' => 'Masukkan Longitude Lokasi']) }}
        </div>
    </div>
</div>
<div class="d-flex justify-content-between align-items-center">
    <a class="btn btn-light" href="{{ url('master/desa-wisata') }}">Kembali</a>
    <button type="submit" class="btn bg-blue">Simpan <i class="icon-paperplane ml-2"></i></button>
</div>