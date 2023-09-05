<?php

namespace App\Http\Livewire\Pages\Desa;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\DesaSk;

class Sk extends Component
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

    public function changeEdit($id) {
        $this->idnya = $id;
        $this->edit = !$this->edit;
        $this->form = DesaSk::find($this->idnya)->only(['nama', 'tahun', 'lembaga']);
    }

    public function save() {
        if($this->edit) {
            $this->edit();

        } else {
            DesaSk::create($this->form + ['desa_wisata_id' => $this->desa]);
        }
        $this->clear();
        session()->flash('message', 'Data berhasil disimpan.');

    }

    public function delete($id) {
        DesaSk::destroy($id);
        session()->flash('hapus', 'Data berhasil dihapus.');
    }

    public function edit()
    {
        DesaSk::find($this->idnya)->update($this->form);
    }

    public function clear()  {
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
        return view('livewire.pages.desa.sk');
    }
}
