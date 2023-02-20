<div>
    <div class="col-12 mb-3">
        <button type="button" class="btn btn-primary rounded-round" data-toggle="modal" data-target="#exampleModalCenter3">
            <i class="mr-2 icon-file-plus2"></i>Tambah Pajak
        </button>
    </div>
    
    <!-- Page length options -->
    <div class="card">
        <div class="card-body">
            <table class="table pajak" style="width:100% !important;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Pajak</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!-- /page length options -->
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter3Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Tambah Pajak</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            {{Form::open(['route' => 'pajak.store','method' => 'post', 'id' => 'my-form'])}} 
            <input type="hidden" name="ekraf_id" value="{{ $devan }}">
            <div class="modal-body">
                <div class="form-group">
                    <label>Tahun</label>
                    {{Form::selectRange('tahun',2021,(int) date('Y')+1, null, ['class' => 'form-control','placeholder' => 'Pilih Tahun', "style" =>
                    'width:150px', 'required'])}}
                </div>
                @if($errors->any())
                    {{ implode('', $errors->all('<div>:message</div>')) }}
                @endif

                <div class="form-group">
                    <label>Pajak</label>
                    {!! Form::text('pajak', null, ['class' => 'form-control', 'placeholder' => 'Masukkan pajak']) !!}
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
{!! JsValidator::formRequest('App\Http\Requests\PajakStoreValidation') !!}
@endpush