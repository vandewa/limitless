<div>
    <div class="col-lg-12">
        <div class="card card-body border-top-info">
            <fieldset>
                <div class="form-group row">
                    <div class="col-6">
                        <label class="col-form-label col-lg-6">NAMA USAHA EKRAF</label>
                        <div class="col-lg-10">
                            {!! Form::text('nama_usaha', $data['nama_usaha'], ['class' => 'form-control', 'readonly' =>
                            true]) !!}
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="col-form-label col-lg-6">NAMA MEREK</label>
                        <div class="col-lg-10">
                            {!! Form::text('nama_merek', $data['nama_merek'], ['class' => 'form-control', 'readonly' =>
                            true]) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label class="col-form-label col-lg-6">NAMA LENGKAP</label>
                        <div class="col-lg-10">
                            {!! Form::text('nama_pemilik', $data['nama_pemilik'], ['class' => 'form-control',
                            'placeholder' => 'Masukkan nama pemlik', 'readonly' => true]) !!}
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="col-form-label col-lg-6">NIK</label>
                        <div class="col-lg-10">
                            {!! Form::number('nik', $data['nik'], ['class' => 'form-control', 'placeholder' => 'Masukkan
                            NIK', 'readonly' => true]) !!}
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="d-flex justify-content-between align-items-center">
                <a class="btn btn-light" href="{{ url('pelaku-wisata/pelaku-wisata') }}">Kembali</a>
                <button type="button" class="btn btn-primary" data-toggle="collapse"
                    data-target="#collapse-button-collapsed">
                    Lihat detail
                </button>
            </div>

            <div class="collapse" id="collapse-button-collapsed">
                <div class="mt-3">
                    <fieldset class="mb-3">
                        {{-- <legend class="text-uppercase font-size-sm font-weight-bold">{{ $submenu }}</legend> --}}

                        <div class="form-group row">
                            <div class="col-6">
                                <label class="col-form-label col-lg-6">JENIS KELAMIN</label>
                                <div class="col-lg-10">
                                    {!! Form::select('jenis_kelamin', get_code_group('JENIS_KELAMIN_ST'),null, ['class'
                                    => 'form-control', 'readonly' => true, 'disabled' => true]) !!}
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="col-form-label col-lg-6">TEMPAT LAHIR</label>
                                <div class="col-lg-10">
                                    {!! Form::text('tempat_lahir', $data['tempat_lahir'], ['class' => 'form-control',
                                    'placeholder' => 'Masukkan tempat lahir', 'readonly' => true]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <label class="col-form-label col-lg-6">TANGGAL LAHIR</label>
                                <div class="col-lg-10">
                                    {!! Form::date('tanggal_lahir', $data['tanggal_lahir'], ['class' => 'form-control',
                                    'readonly' => true]) !!}
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="col-form-label col-lg-6">ALAMAT</label>
                                <div class="col-lg-10">
                                    {!! Form::textarea('alamat', $data['alamat'], ['class' => 'form-control', 'rows' =>
                                    2, 'readonly' => true]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label class="col-form-label col-lg-6">RT</label>
                                <div class="col-lg-8">
                                    {!! Form::number('rt', null, ['class' => 'form-control', 'placeholder' => 'Masukkan
                                    RT', 'readonly' => true]) !!}
                                </div>
                            </div>
                            <div class="col-3">
                                <label class="col-form-label col-lg-6">RW</label>
                                <div class="col-lg-8">
                                    {!! Form::number('rw', null, ['class' => 'form-control', 'placeholder' => 'Masukkan
                                    RW', 'readonly' => true]) !!}
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="col-form-label col-lg-6">KABUPATEN</label>
                                <div class="col-lg-10">
                                    {{Form::select('kabupaten', get_kab(), $data->kabupaten, ['class' => 'form-control
                                    select-search', 'placeholder' => 'Pilih Kabupaten','id' => 'kabupaten', 'disabled'
                                    => true])}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <label class="col-form-label col-lg-6">KECAMATAN</label>
                                <div class="col-lg-10">
                                    {{Form::select('kecamatan', get_kec(), $data->kecamatan, ['class' => 'form-control
                                    select-search', 'placeholder' => 'Pilih Kecamatan','id' => 'kecamatan', 'disabled'
                                    => true])}}
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="col-form-label col-lg-6">KELURAHAN/DESA</label>
                                <div class="col-lg-10">
                                    {{Form::select('kelurahan', get_kel($data->kelurahan), $data->kelurahan, ['class' =>
                                    'form-control select-search', 'placeholder' => 'Pilih Kelurahan', 'id' =>
                                    'kelurahan', 'disabled' => true])}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <label class="col-form-label col-lg-6">SUBSEKTOR EKRAF</label>
                                <div class="col-lg-10">
                                    {!! Form::select('subsektor_id[]', $subsektor, $subsektornya, ['class' =>
                                    'form-control select-fixed-multiple','multiple' => 'multiple', 'disabled' => true])
                                    !!}
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="col-form-label col-lg-6">JENIS BARANG/JASA</label>
                                <div class="col-lg-10">
                                    {!! Form::text('jenis_barang_jasa', $data['jenis_barang_jasa'], ['class' =>
                                    'form-control', 'readonly' => true]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <label class="col-form-label col-lg-6">NOMOR HP</label>
                                <div class="col-lg-10">
                                    {!! Form::number('nomor_hp', $data['nomor_hp'], ['class' => 'form-control',
                                    'readonly' => true]) !!}
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="col-form-label col-lg-6">JUMLAH TENAGA KERJA</label>
                                <div class="col-lg-10">
                                    {!! Form::number('jml_tenaga', $data['jml_tenaga'], ['class' => 'form-control',
                                    'readonly' => true]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <label class="col-form-label col-lg-6">STATUS HKI</label>
                                <div class="col-lg-10">
                                    {!! Form::select('hki_status', get_code_group('HKI_ST'),null, ['class' =>
                                    'form-control', 'readonly' => true, 'disabled' => true]) !!}
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </div>
            </div>
        </div>
    </div>

</div>