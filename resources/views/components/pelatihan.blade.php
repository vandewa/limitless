<div>
    <div class="col-12 mb-3">
        <button type="button" class="btn btn-primary rounded-round" data-toggle="modal"
            data-target="#exampleModalCenter4">
            <i class="mr-2 icon-file-plus2"></i>Tambah Pelatihan
        </button>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <h1>Pelatihan</h1>
                </div>
            </div>
        </div>
    </div>


    <!-- Page length options -->
    <div class="card">
        <div class="card-body">
            <table class="table pelatihan" style="width:100% !important;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Nama Pelatihan</th>
                        <th>Lembaga Penyelenggara</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!-- /page length options -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenter4Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Pelatihan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{Form::open(['route' => $route,'method' => 'post', "id" => "pelatihan"])}}
                <input type="hidden" name="ekraf_id" value="{{ $devan }}">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tahun</label>
                        {{Form::selectRange('tahun',2019,(int) date('Y')+1, null, ['class' =>
                        'form-control','placeholder' => 'Pilih Tahun', "style" =>
                        'width:150px', 'required'])}}
                    </div>
                    @if($errors->any())
                    {{ implode('', $errors->all('<div>:message</div>')) }}
                    @endif

                    <div class="form-group">
                        <div class="form-group">
                            <label>Nama Pelatihan</label>
                            {{ Form::text('nama_pelatihan', null, ['class' => 'form-control',
                            'placeholder' => 'Masukkan nama pelatihan' ]) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label>Lembaga Penyelenggara</label>
                            {{ Form::text('lembaga_penyelenggara', null, ['class' => 'form-control',
                            'placeholder' => 'Masukkan nama lembaga penyelenggara' ]) }}
                        </div>
                    </div>

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