<div>
    <div class="col-12 mb-3">
        <button type="button" class="btn btn-primary rounded-round" data-toggle="modal"
            data-target="#exampleModalCenter5">
            <i class="mr-2 icon-file-plus2"></i>Tambah Sertifikat
        </button>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <h1>Sertifikat</h1>
                </div>
            </div>
        </div>
    </div>


    <!-- Page length options -->
    <div class="card">
        <div class="card-body">
            <table class="table certificate" style="width:100% !important;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tgl Dikeluarkan</th>
                        <th>Jenis Sertifikat</th>
                        <th>Sertifikat</th>
                        <th>Lembaga Penguji</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!-- /page length options -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenter5Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Sertifikat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{Form::open(['route' => $route, 'method' => 'post', 'id' => 'certificate'])}}
                <input type="hidden" value="{{ Request::segment(3) }}" name="pelaku_wisata_id">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tanggal Dikeluarkan(Sertifikat)</label>
                        <div class="input-group input-group-sm">
                            {{Form::date('tanggal', null, ['class' =>
                            'form-control','placeholder' => 'Pilih Tahun', "style" =>
                            'width:150px', 'required'])}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Jenis Sertifikat</label>
                        <div class="input-group input-group-sm">
                            {{Form::select('jenis_sertifikat_tp', get_code_group('JENIS_SERTIFIKAT_TP'), null, ['class'=> 'form-control', 'placeholder' => 'Pilih Jenis'])}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nama Sertifikat</label>
                        <div class="input-group input-group-sm">
                            {!! Form::text('nama', null, ['class' => 'form-control',
                            'placeholder' => 'Masukkan nama sertifikat']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Lembaga Penguji</label>
                        <div class="input-group input-group-sm">
                            {!! Form::text('lembaga', null, ['class' => 'form-control',
                            'placeholder' => 'Masukkan lembaga penguji']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nomor Registrasi</label>
                        <div class="input-group input-group-sm">
                            {!! Form::text('no_registrasi', null, ['class' => 'form-control',
                            'placeholder' => 'Masukkan nomor registrasi']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nomor Sertifikat BNSP</label>
                        <div class="input-group input-group-sm">
                            {!! Form::text('no_sertifikat_bnps', null, ['class' => 'form-control',
                            'placeholder' => 'Masukkan nomor sertifikat bnsp']) !!}
                        </div>
                    </div>

                    @if($errors->any())
                    {{ implode('', $errors->all('<div>:message</div>')) }}
                    @endif

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>