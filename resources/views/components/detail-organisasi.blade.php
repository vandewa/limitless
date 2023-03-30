<div>
    <div class="col-lg-12">
        <div class="card card-body border-top-info">
            <fieldset>
                <div class="form-group row">
                    <div class="col-6">
                        <label class="col-form-label col-lg-6">JENIS ORGANISASI</label>
                        <div class="col-lg-10">
                            {!! Form::select('jenis', get_code_group('JENIS_ORGANISASI'), $data['jenis'], ['class' =>
                            'form-control
                            select-search',
                            'placeholder' => 'Pilih Jenis Organisasi', 'disabled' => 'true']) !!}
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="col-form-label col-lg-6">NAMA ORGANISASI</label>
                        <div class="col-lg-10">
                            {!! Form::text('nama', $data['nama'], ['class' => 'form-control',
                            'placeholder' => 'Masukkan Nama Organisasi', 'readonly'])
                            !!}
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label class="col-form-label col-lg-6">KETUA ORGANISASI</label>
                        <div class="col-lg-10">
                            {!! Form::text('ketua', $data['ketua'], ['class' => 'form-control',
                            'placeholder' => 'Masukkan Nama Ketua', 'readonly'])
                            !!}
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="col-form-label col-lg-6">ALAMAT ORGANISASI</label>
                        <div class="col-lg-10">
                            {!! Form::textarea('alamat', $data['alamat'], ['class' => 'form-control', 'rows' => 2,
                            'readonly']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label class="col-form-label col-lg-6">CONTACT PERSON</label>
                        <div class="col-lg-10">
                            {{Form::text('contact', $data['contact'], ['class' => 'form-control',
                            'placeholder' => 'Masukkan Contact Person', 'readonly'])}}
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="col-form-label col-lg-6">JENIS LEGAL FORMAL</label>
                        <div class="col-lg-10">
                            {{Form::text('jenis_legal_formal', $data['jenis_legal_formal'], ['class' => 'form-control',
                            'placeholder' => 'Masukkan Legal Formal', 'readonly'])}}
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label class="col-form-label col-lg-6">NOMOR LEGAL FORMAL</label>
                        <div class="col-lg-10">
                            {{Form::text('nomor_legal_formal', $data['nomor_legal_formal'], ['class' => 'form-control',
                            'placeholder' => 'Masukkan Nomor Legal Formal', 'readonly'])}}
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="col-form-label col-lg-6">LEMBAGA YANG MENGELUARKAN</label>
                        <div class="col-lg-10">
                            {{Form::text('lembaga_yang_mengeluarkan', $data['lembaga_yang_mengeluarkan'], ['class' =>
                            'form-control',
                            'placeholder' => 'Masukkan Lembaga Yang Mengeluarkan', 'readonly'])}}
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label class="col-form-label col-lg-6">JUMLAH ANGGOTA LAKI - LAKI</label>
                        <div class="col-lg-10">
                            {{Form::text('anggota_lelaki', $data['anggota_lelaki'], ['class' => 'form-control',
                            'placeholder' => 'Masukkan Jumlah Anggota Laki - Laki', 'readonly'])}}
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="col-form-label col-lg-6">JUMLAH ANGGOTA PEREMPUAN</label>
                        <div class="col-lg-10">
                            {{Form::text('anggota_perempuan', $data['anggota_perempuan'], ['class' => 'form-control',
                            'placeholder' => 'Masukkan Jumlah Anggota Perempuan', 'readonly'])}}
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="d-flex justify-content-between align-items-center">
                <a class="btn btn-light" href="{{ url('master/organisasi') }}">Kembali</a>
            </div>
        </div>
    </div>

</div>