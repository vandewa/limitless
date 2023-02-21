<div>
    <div class="col-12 mb-3">
        <button type="button" class="btn btn-primary rounded-round" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="mr-2 icon-file-plus2"></i>Tambah Biaya Produksi
        </button>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <h1>Biaya Produksi</h1>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Page length options -->
    <div class="card">
        <div class="card-body">
            <table class="table datatable-basic produksi" style="width:100% !important;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Biaya Produksi</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!-- /page length options -->
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Tambah Biaya Produksi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            {{Form::open(['route' => 'biaya-produksi.store','method' => 'post', 'id' => 'my-form'])}} 
            <input type="hidden" name="ekraf_id" value="{{ $devan }}">
            <div class="modal-body">
                <div class="form-group">
                    <label>Tahun</label>
                    {{Form::selectRange('tahun',2021,(int) date('Y')+1, null, ['class' => 'form-control'.($errors->has('tahun') ?' border-danger' :''),'placeholder' => 'Pilih Tahun', "style" =>
                    'width:150px', 'required'])}}
                </div>
                @if($errors->any())
                    {{ implode('', $errors->all('<div>:message</div>')) }}
                @endif

                <div class="form-group">
                    <label>Biaya Produksi</label>
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span>Rp.</span>
                            </span>
                        </div>
                        {!! Form::number('biaya_produksi', null, ['class' => 'form-control', 'placeholder' => 'Masukkan biaya produksi']) !!}
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

  @push('after-script')
  {!! JsValidator::formRequest('App\Http\Requests\BiayaProduksiStoreValidation') !!}
  @endpush