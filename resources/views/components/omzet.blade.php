<div>
    <div class="col-12 mb-3">
        <button type="button" class="btn btn-primary rounded-round" data-toggle="modal" data-target="#exampleModalCenter1">
            <i class="mr-2 icon-file-plus2"></i>Tambah Omzet
        </button>
    </div>
    
    <!-- Page length options -->
    <div class="card">
        <div class="card-body">
            <table class="table omzet" style="width:100% !important;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Omzet</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!-- /page length options -->
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Tambah Omzet</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                {{Form::open(['route' => 'ekraf.store','method' => 'post', 'id' => 'my-form'])}} 
                <div class="form-group">
                    <label>Tahun</label>
                    {{Form::selectRange('tahun',2021,(int) date('Y')+1, null, ['class' => 'form-control','placeholder' => 'Pilih Tahun', "style" =>
                    'width:150px', 'required'])}}
                </div>

                <div class="form-group">
                    <label>Omzet</label>
                    {!! Form::text('omzet', null, ['class' => 'form-control', 'placeholder' => 'Masukkan omzet']) !!}
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Tambah</button>
                </div>
                {{Form::close()}}
            </div>
            {{-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Tambah</button>
            </div> --}}
          </div>
        </div>
      </div>
</div>