<div class="col-12 mb-3">
	{{-- <a href="{{ route('ekraf.create') }}"><button class="btn btn-primary rounded-round"><i class="mr-2 icon-file-plus2"></i>Tambah Biaya Produksi</button></a> --}}
	<button type="button" class="btn btn-primary rounded-round" data-toggle="modal" data-target="#exampleModalCenter">
		<i class="mr-2 icon-file-plus2"></i>Tambah Biaya Produksi
	</button>
</div>

<!-- Page length options -->
<div class="card">
    <div class="card-body">
        <table class="table datatable-basic tabelku" style="width:100% !important;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Usaha</th>
                    <th>Pemilik</th>
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
		<div class="modal-body">
			{{Form::open(['route' => 'ekraf.store','method' => 'post', 'id' => 'my-form'])}} 
			@include('admin.ekraf.form')	
			{{Form::close()}}
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div>
	  </div>
	</div>
  </div>