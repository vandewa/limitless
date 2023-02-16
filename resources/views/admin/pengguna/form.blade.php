@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="form-group">
    <label>Nama:</label>
    {{ Form::text('name', null, ['class' => 'form-control',
    'placeholder' => 'Masukkan Nama']) }}
</div>
<div class="form-group">
    <label>Email:</label>
    {{ Form::text('email', null, ['class' => 'form-control',
    'placeholder' => 'Masukkan Email']) }}
</div>

@if( Request::segment(4) == 'edit' )

<input type="text" name="id_user" value="{{ $data->id }}" hidden>
<div class="form-group">
    <label>Old Password:</label>
    {{ Form::password('current_password', ['class' => 'form-control',
    'placeholder' => 'Masukkan Password Sekarang']) }}
</div>
<div class="form-group">
    <label>New Password:</label>
    {{ Form::password('new_password', ['class' => 'form-control',
    'placeholder' => 'Masukkan Password Baru']) }}
</div>
<div class="form-group">
    <label>Confirm New Password:</label>
    {{Form::password('new_confirm_password',['class' => 'form-control',
    'placeholder' => 'Ketik Ulang Password Baru'])}}
</div>

@else

<div class="form-group">
    <label>Password:</label>
    {{ Form::password('password', ['class' => 'form-control',
    'placeholder' => 'Masukkan Password']) }}
</div>
<div class="form-group">
    <label>Confirm Password:</label>
    {{ Form::password('password_confirmation', ['class' => 'form-control',
    'placeholder' => 'Ketik Ulang Password']) }}
</div>

@endif

<div class="d-flex justify-content-between align-items-center">
    <a class="btn btn-light" href="{{ route('pengguna.index') }}">Kembali</a>
    <button type="submit" class="btn bg-blue">Simpan <i class="icon-paperplane ml-2"></i></button>
</div>