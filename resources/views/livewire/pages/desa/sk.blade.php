<div>
    <fieldset>
        <legend class="font-weight-semibold text-uppercase font-size-sm">Informasi Pelatihan Desa</legend>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>Nama:</label>
               <input type="text" class="form-control" placeholder="Nama Pelatihan" wire:model="form.nama">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Lembaga:</label>
                <input type="text" class="form-control" placeholder="Nama Pelatihan" wire:model="form.lembaga">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Tahun:</label>
                <input type="number" class="form-control" placeholder="tahun" wire:model="form.tahun">
            </div>
        </div>
    </div>
    </fieldset>

    <div class="d-flex  align-items-center">
        @if($edit)
        <div class="mr-3">
            <button type="button"  wire:click="clear()" class="btn bg-warning">Batal <i class="icon-paperplane ml-2"></i></button>
        </div>

        @endif
        <button type="button"  wire:click="save" class="btn bg-blue">Simpan <i class="icon-paperplane ml-2"></i></button>
    </div>

    @if (session()->has('message'))
    <div class="alert bg-success alert-styled-left alert-dismissible mt-3">
        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
        <span class="font-weight-semibold">Selamat!</span>data berhasil disimpan
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
                    <th>Nama</th>
                    <th>Lembaga</th>
                    <th>Tahun</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->lembaga }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>
                        <div>
                            <a href="#" wire:click="changeEdit({{ $item->id }})" class="btn btn-outline-info rounded-round"><i class="mr-2 icon-pencil5"></i>Edit</a>
                            <a href="#" wire:click="delete({{ $item->id }})"  class="btn btn-outline-danger rounded-round "><i class="mr-2 icon-trash"></i>Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>
