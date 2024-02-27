<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold">{{ $submenu }}</legend>
    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label col-lg-6">NAMA LENGKAP</label>
            <div class="col-lg-10">
                {!! Form::text('nama_pemilik', null, ['class' => 'form-control', 'placeholder' => 'Masukkan nama pemilik']) !!}
            </div>
        </div>
        <div class="col-6">
            <label class="col-form-label col-lg-6">NIK</label>
            <div class="col-lg-10">
                {!! Form::number('nik', null, ['class' => 'form-control', 'placeholder' => 'Masukkan NIK']) !!}
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label col-lg-6">JENIS KELAMIN</label>
            <div class="col-lg-10">
                {!! Form::select('jenis_kelamin', get_code_group('JENIS_KELAMIN_ST'), null, [
                    'class' => 'form-control
                                                                                                                                select-search',
                ]) !!}
            </div>
        </div>
        <div class="col-6">
            <label class="col-form-label col-lg-6">TEMPAT LAHIR</label>
            <div class="col-lg-10">
                {!! Form::text('tempat_lahir', null, ['class' => 'form-control', 'placeholder' => 'Masukkan tempat lahir']) !!}
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label col-lg-6">TANGGAL LAHIR</label>
            <div class="col-lg-10">
                {!! Form::text('tanggal_lahir', null, ['class' => 'form-control daterange-single']) !!}
            </div>
        </div>
        <div class="col-6">
            <label class="col-form-label col-lg-6">ALAMAT</label>
            <div class="col-lg-10">
                {!! Form::textarea('alamat', null, ['class' => 'form-control', 'rows' => 2]) !!}
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-3">
            <label class="col-form-label col-lg-6">RT</label>
            <div class="col-lg-8">
                {!! Form::number('rt', null, ['class' => 'form-control', 'placeholder' => 'Masukkan RT']) !!}
            </div>
        </div>
        <div class="col-3">
            <label class="col-form-label col-lg-6">RW</label>
            <div class="col-lg-8">
                {!! Form::number('rw', null, ['class' => 'form-control', 'placeholder' => 'Masukkan RW']) !!}
            </div>
        </div>
        <div class="col-6">
            <label class="col-form-label col-lg-6">KABUPATEN</label>
            <div class="col-lg-10">

                @if (Request::segment(3) == 'create')
                    {{ Form::select('kabupaten', get_kab(), null, ['class' => 'form-control select-search', 'id' => 'kabupaten']) }}
                @else
                    {{ Form::select('kabupaten', get_kab(), $data->kabupaten, [
                        'class' => 'form-control select-search',
                        'placeholder' => 'Pilih Kabupaten',
                        'id' => 'kabupaten',
                    ]) }}
                @endif
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label col-lg-6">KECAMATAN</label>
            <div class="col-lg-10">
                @if (Request::segment(3) == 'create')
                    {{ Form::select('kecamatan', get_kec(), null, [
                        'class' => 'form-control select-search',
                        'placeholder' => 'Pilih Kecamatan',
                        'id' => 'kecamatan',
                    ]) }}
                @else
                    {{ Form::select('kecamatan', get_kec(), $data->kecamatan, [
                        'class' => 'form-control select-search',
                        'placeholder' => 'Pilih Kecamatan',
                        'id' => 'kecamatan',
                    ]) }}
                @endif
            </div>
        </div>
        <div class="col-6">
            <label class="col-form-label col-lg-6">KELURAHAN/DESA</label>
            <div class="col-lg-10">
                @if (Request::segment(3) == 'create')
                    {{ Form::select('kelurahan', [], null, [
                        'class' => 'form-control select-search',
                        'placeholder' => 'Pilih
                                                                                                                                                            Kelurahan',
                        'id' => 'kelurahan',
                    ]) }}
                @else
                    {{ Form::select('kelurahan', get_kel($data->kecamatan), $data->kelurahan, [
                        'class' => 'form-control
                                                                                                                                                            select-search',
                        'placeholder' => 'Pilih Kelurahan',
                        'id' => 'kelurahan',
                    ]) }}
                @endif
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label col-lg-6">USAHA PARIWISATA</label>
            <div class="col-lg-10">
                @if (Request::segment(3) == 'create')
                    {!! Form::select('subsektor_id', $uspar, null, [
                        'class' => 'form-control
                                                                                                                                                            select-search',
                        'placeholder' => 'Pilih Usaha Pariwisata',
                    ]) !!}
                @else
                    {!! Form::select('subsektor_id', $uspar, $usparnya, [
                        'class' => 'form-control
                                                                                                                                                            select-search',
                        'placeholder' => 'Pilih Usaha Pariwisata',
                    ]) !!}
                @endif
            </div>
        </div>
        <div class="col-6">
            <label class="col-form-label col-lg-6">JENIS BARANG/JASA</label>
            <div class="col-lg-10">
                {!! Form::select('jenis_barang_jasa', get_code_group('BARANG_ST'), null, [
                    'class' => 'form-control
                                                                                                                                select-search',
                ]) !!}
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label col-lg-6">NAMA USAHA PARIWISATA</label>
            <div class="col-lg-10">
                {!! Form::text('nama_usaha', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Masukkan Nama Usaha Pariwisata',
                ]) !!}
            </div>
        </div>
        <div class="col-6">
            <label class="col-form-label col-lg-6">NPWP</label>
            <div class="col-lg-10">
                {!! Form::text('npwp', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nomor NPWP']) !!}
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label col-lg-6">NIB</label>
            <div class="col-lg-10">
                {!! Form::text('nib', null, ['class' => 'form-control', 'placeholder' => 'Masukkan nomor NIB']) !!}
            </div>
        </div>
        <div class="col-6">
            <label class="col-form-label col-lg-6">TANGGAL NIB</label>
            <div class="col-lg-10">
                {!! Form::text('tgl_nib', null, ['class' => 'form-control daterange-single']) !!}
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label col-lg-6">NOMOR HP</label>
            <div class="col-lg-10">
                {!! Form::number('nomor_hp', null, ['class' => 'form-control', 'placeholder' => 'Masukkan nomor hp']) !!}
            </div>
        </div>
        <div class="col-6">
            <label class="col-form-label col-lg-6">JUMLAH TENAGA LAKI - LAKI</label>
            <div class="col-lg-10">
                {!! Form::number('jml_tenaga_laki', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Jumlah Tenaga Laki - Laki',
                ]) !!}
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label col-lg-6">JUMLAH TENAGA PEREMPUAN</label>
            <div class="col-lg-10">
                {!! Form::number('jml_tenaga_perempuan', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Jumlah Tenaga Perempuan',
                ]) !!}
            </div>
        </div>
        <div class="col-6">
            <label class="col-form-label col-lg-6">ASOSIASI</label>
            <div class="col-lg-10">
                {!! Form::text('asosiasi', null, ['class' => 'form-control', 'placeholder' => 'Contoh (PHRI)']) !!}
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label col-lg-6">IZIN USAHA PARIWISATA</label>
            <div class="col-lg-10">
                {!! Form::text('izin_dimiliki', null, ['class' => 'form-control', 'placeholder' => 'xxx/xxx/xxx']) !!}
            </div>
        </div>
        <div class="col-6">
            <label class="col-form-label col-lg-6">ORGANISASI</label>
            <div class="col-lg-10">
                {!! Form::select('organisasi_id', get_organisasi(), null, ['class' => 'form-control select-search']) !!}
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label col-lg-6">Latitude</label>
            <div class="col-lg-10">
                {{ Form::text('ltd', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Latitude Lokasi']) }}
            </div>
        </div>
        <div class="col-6">
            <label class="col-form-label col-lg-6">Longitude</label>
            <div class="col-lg-10">
                {{ Form::text('lng', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Longitude Lokasi']) }}
            </div>
        </div>
    </div>
    <div class="form-group row">

        <div class="col-md-6">
            <label class="col-form-label col-lg-6">LOGO USAHA</label>
            <div class="col-lg-10">
                <input type="file" name="logo" placeholder="Choose image" id="picture" class="form-control mb-3"
                    accept="image/png">
                @if (Request::segment(4) == 'edit')
                    <img src="{{ route('helper.show-picture', ['path' => $data->logo]) }}" alt=""
                        width="50%;">
                @else
                    <img id="preview-image-before-upload" src="{{ asset('noimage.png') }}" alt="preview image"
                        style="max-height: 250px;">
                @endif
            </div>
        </div>
    </div>

</fieldset>

<div class="d-flex justify-content-between align-items-center">
    <a class="btn btn-light" href="{{ url('pelaku-wisata/pelaku-wisata') }}">Kembali</a>
    <button type="submit" class="btn bg-blue">Simpan <i class="icon-paperplane ml-2"></i></button>
</div>

@push('after-script')
    <script>
        $('#kecamatan').change(function() {
            var kelurahan = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{ route('kelurahan') }}?kelurahan=" + kelurahan,
                success: function(res) {
                    $("#kelurahan").empty();
                    $("#kelurahan").append('<option value="">Pilih Kelurahan</option>');
                    $.each(res, function(key, value) {
                        $("#kelurahan").append('<option value="' + key + '">' + value +
                            '</option>');
                    });
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#picture').change(function() {
                console.log('berubah');
                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });
        });
    </script>
@endpush
