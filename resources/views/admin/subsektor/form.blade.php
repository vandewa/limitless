<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold">{{ $subsubmenu }}</legend>

    <div class="form-group row">
        <label class="col-form-label col-lg-2">Nama Subsektor</label>
        <div class="col-lg-10">
            {!! Form::text('nama_subsektor', null, ['class' => 'form-control',
            'placeholder' => 'Masukkan nama subsektor']) !!}
        </div>
    </div>
</fieldset>

<div class="d-flex justify-content-between align-items-center">
    <a class="btn btn-light" href="{{ url('master/subsektor') }}">Kembali</a>
    <button type="submit" class="btn bg-blue">Simpan <i class="icon-paperplane ml-2"></i></button>
</div>