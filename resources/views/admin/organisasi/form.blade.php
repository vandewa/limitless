<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold">{{ $submenu }}</legend>
    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label col-lg-6">JENIS ORGANISASI</label>
            <div class="col-lg-10">
                {!! Form::select('jenis', get_code_group('JENIS_ORGANISASI'), null, ['class' => 'form-control
                select-search',
                'placeholder' => 'Pilih Jenis Organisasi']) !!}
            </div>
        </div>
        <div class="col-6">
            <label class="col-form-label col-lg-6">NAMA ORGANISASI</label>
            <div class="col-lg-10">
                {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Organisasi'])
                !!}
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label col-lg-6">KETUA ORGANISASI</label>
            <div class="col-lg-10">
                {!! Form::text('ketua', null, ['class' => 'form-control',
                'placeholder' => 'Masukkan Nama Ketua'])
                !!}
            </div>
        </div>
        <div class="col-6">
            <label class="col-form-label col-lg-6">ALAMAT ORGANISASI</label>
            <div class="col-lg-10">
                {!! Form::textarea('alamat', null, ['class' => 'form-control', 'rows' => 2]) !!}
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label col-lg-6">CONTACT PERSON</label>
            <div class="col-lg-10">
                {{Form::text('contact', null, ['class' => 'form-control',
                'placeholder' => 'Masukkan Contact Person'])}}
            </div>
        </div>
        <div class="col-6">
            <label class="col-form-label col-lg-6">JENIS LEGAL FORMAL</label>
            <div class="col-lg-10">
                {{Form::text('jenis_legal_formal', null, ['class' => 'form-control',
                'placeholder' => 'Masukkan Legal Formal'])}}
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label col-lg-6">NOMOR LEGAL FORMAL</label>
            <div class="col-lg-10">
                {{Form::text('nomor_legal_formal', null, ['class' => 'form-control',
                'placeholder' => 'Masukkan Nomor Legal Formal'])}}
            </div>
        </div>
        <div class="col-6">
            <label class="col-form-label col-lg-6">LEMBAGA YANG MENGELUARKAN</label>
            <div class="col-lg-10">
                {{Form::text('lembaga_yang_mengeluarkan', null, ['class' => 'form-control',
                'placeholder' => 'Masukkan Lembaga Yang Mengeluarkan'])}}
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label col-lg-6">JUMLAH ANGGOTA LAKI - LAKI</label>
            <div class="col-lg-10">
                {{Form::text('anggota_lelaki', null, ['class' => 'form-control',
                'placeholder' => 'Masukkan Jumlah Anggota Laki - Laki'])}}
            </div>
        </div>
        <div class="col-6">
            <label class="col-form-label col-lg-6">JUMLAH ANGGOTA PEREMPUAN</label>
            <div class="col-lg-10">
                {{Form::text('anggota_perempuan', null, ['class' => 'form-control',
                'placeholder' => 'Masukkan Jumlah Anggota Perempuan'])}}
            </div>
        </div>
    </div>
</fieldset>

<div class="text-right">
    <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
</div>

@push('after-script')
@endpush