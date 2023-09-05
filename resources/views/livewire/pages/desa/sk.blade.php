<div>
    <fieldset>
        <legend class="font-weight-semibold text-uppercase font-size-sm">Informasi Pelatihan Desa</legend>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" class="form-control" placeholder="Nama SK" wire:model="form.nama">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Tanggal:</label>
                    <input type="date" id="_tanggal" class="form-control" placeholder="Tanggal SK"
                        wire:model="form.tanggal">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Nomor:</label>
                    <input type="text" class="form-control" placeholder="Nomor SK" wire:model="form.nomor">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Pejabat Yang Mengeluarkan:</label>
                    <input type="text" class="form-control" placeholder="Pejabat Yang Mengeluarkan SK"
                        wire:model="form.pejabat_yang_mengeluarkan">
                </div>
            </div>
        </div>

    </fieldset>

    <div class="d-flex  align-items-center">
        @if($edit)
        <div class="mr-3">
            <button type="button" wire:click="clear()" class="btn bg-warning">Batal <i
                    class="icon-paperplane ml-2"></i></button>
        </div>

        @endif
        <button type="button" wire:click="save" class="btn bg-blue">Simpan <i class="icon-paperplane ml-2"></i></button>
    </div>

    @if (session()->has('message'))
    <div class="alert bg-success alert-styled-left alert-dismissible mt-3">
        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
        <span class="font-weight-semibold">Selamat!</span> Data berhasil disimpan
    </div>
    @endif
    @if (session()->has('hapus'))
    <div class="alert bg-warning alert-styled-left alert-dismissible mt-3">
        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
        <span class="font-weight-semibold">Selamat!</span> Data berhasil dihapus !
    </div>
    @endif
    <div class="mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama SK</th>
                    <th>Tanggal SK</th>
                    <th>Nomor SK</th>
                    <th>Pejabat Yang Mengeluarkan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->nomor }}</td>
                    <td>{{ $item->pejabat_yang_mengeluarkan }}</td>
                    <td>
                        <div>
                            <a href="#" wire:click="changeEdit({{ $item->id }})"
                                class="btn btn-outline-info rounded-round"><i class="mr-2 icon-pencil5"></i>Edit</a>
                            <a href="#" wire:click="delete({{ $item->id }})"
                                class="btn btn-outline-danger rounded-round "><i class="mr-2 icon-trash"></i>Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>