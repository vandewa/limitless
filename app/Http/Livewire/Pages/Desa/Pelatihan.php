<?php

namespace App\Http\Livewire\Pages\Desa;

use Livewire\Component;
use App\Models\DesaPelatihan;
use App\Models\DesaWisata;
use Livewire\WithPagination;


class Pelatihan extends Component
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
        $this->form = DesaPelatihan::find($this->idnya)->only(['nama', 'tahun', 'lembaga']);
    }

    public function save() {
        if($this->edit) {
            $this->edit();

        } else {
            DesaPelatihan::create($this->form + ['desa_wisata_id' => $this->desa]);
        }
        $this->clear();
        session()->flash('message', 'Data berhasil disimpan.');

    }

    public function delete($id) {
        DesaPelatihan::destroy($id);
        session()->flash('hapus', 'Data berhasil dihapus.');
    }

    public function edit()
    {
        DesaPelatihan::find($this->idnya)->update($this->form);
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
        return view('livewire.pages.desa.pelatihan', [
            'post' => DesaPelatihan::where('desa_wisata_id', $this->desa)->paginate(20)
        ]);
    }
}
