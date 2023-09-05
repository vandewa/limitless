<?php

namespace App\Http\Livewire\Pages\Desa;

use Livewire\WithPagination;
use App\Models\DesaSertifikat;

use Livewire\Component;

class Sertifikat extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $desa;
    public $edit = false;
    public $idnya;
    public $form = [
        'nama' => '',
        'tahun' => '',
        'lembaga' => '',
    ];

    public function changeEdit($id)
    {
        $this->idnya = $id;
        $this->edit = !$this->edit;
        $this->form = DesaSertifikat::find($this->idnya)->only(['nama', 'tahun', 'lembaga']);
    }

    public function save()
    {
        if ($this->edit) {
            $this->edit();
        } else {
            DesaSertifikat::create($this->form + ['desa_wisata_id' => $this->desa]);
        }
        $this->clear();
        session()->flash('message', 'Data berhasil disimpan.');
    }

    public function delete($id)
    {
        DesaSertifikat::destroy($id);
        session()->flash('hapus', 'Data berhasil dihapus.');
    }

    public function edit()
    {
        DesaSertifikat::find($this->idnya)->update($this->form);
    }

    public function clear()
    {
        $this->edit = false;
        $this->idnya = "";
        $this->form = [
            'nama' => '',
            'tahun' => '',
            'lembaga' => '',
        ];
    }


    public function render()
    {
        return view('livewire.pages.desa.sertifikat', [
            'post' => DesaSertifikat::where('desa_wisata_id', $this->desa)->paginate(10)
        ]);
    }
}
