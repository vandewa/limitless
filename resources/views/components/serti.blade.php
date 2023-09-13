<div>
    <div class="col-12 mb-3">
        <button type="button" class="btn btn-primary rounded-round" data-toggle="modal" data-target="#exampleModalCenter5">
            <i class="mr-2 icon-file-plus2"></i>Tambah Sertifikat Kompetensi
        </button>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <h1>Sertifikat Kompetensi</h1>
                </div>
            </div>
        </div>
    </div>


    <!-- Page length options -->
    <div class="card">
        <div class="card-body">
            <table class="table serti" style="width:100% !important;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Lembaga Penguji</th>
                        <th>Nomor Registrasi</th>
                        <th>Nomor BNSP</th>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Sertifikat Kompetensi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{ Form::open(['route' => $route, 'method' => 'post', 'id' => 'serti']) }}
                <input type="hidden" name="ekraf_id" value="{{ $devan }}">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tanggal Dikeluarkan(Sertifikat)</label>
                        <div class="input-group input-group-sm">
                            {{ Form::date('tahun', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Pilih Tahun',
                                'style' => 'width:150px',
                                'required',
                            ]) }}
                        </div>
                    </div>
                    @if ($errors->any())
                        {{ implode('', $errors->all('<div>:message</div>')) }}
                    @endif

                    <div class="form-group">
                        <div class="form-group">
                            <label>Lembaga Penguji</label>
                            {{ Form::text('lembaga_penguji', null, ['class' => 'form-control', 'placeholder' => 'Nama Lembaga Penguji']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label>Nomor Registrasi</label>
                            {{ Form::text('nomor_registrasi', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Masukkan Nomor Registrasi',
                            ]) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label>Nomor BNSP</label>
                            {{ Form::text('nomor_bnsp', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nomor BNSP']) }}
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
