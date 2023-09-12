<?php

namespace App\Livewire\Pages\Desa;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\DesaSk;

class Sk extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $desa, $idnya, $edit = false;

    public $form = [
        'nama' => '',
        'tanggal' => '',
        'nomor' => '',
        'pejabat_yang_mengeluarkan' => '',
    ];

    public function changeEdit($id)
    {
        $this->idnya = $id;
        $this->edit = !$this->edit;
        $this->form = DesaSk::find($this->idnya)->only(['nama', 'tanggal', 'nomor', 'pejabat_yang_mengeluarkan']);
    }

    public function save()
    {
        if ($this->edit) {
            $this->edit();
        } else {
            DesaSk::create([
                'desa_wisata_id' => $this->desa,
                'nama' => $this->form['nama'],
                'tanggal' => $this->form['tanggal'],
                'nomor' => $this->form['nomor'],
                'pejabat_yang_mengeluarkan' => $this->form['pejabat_yang_mengeluarkan'],
            ]);
        }
        $this->clear();
        session()->flash('message', 'Data berhasil disimpan.');
    }

    public function delete($id)
    {
        DesaSk::destroy($id);
        session()->flash('hapus', 'Data berhasil dihapus.');
    }

    public function edit()
    {
        DesaSk::find($this->idnya)->update([
            'nama' => $this->form['nama'],
            'tanggal' => $this->form['tanggal'],
            'nomor' => $this->form['nomor'],
            'pejabat_yang_mengeluarkan' => $this->form['pejabat_yang_mengeluarkan'],
        ]);
    }

    public function clear()
    {
        $this->edit = false;
        $this->idnya = "";
        $this->form = [
            'nama' => '',
            'tanggal' => '',
            'nomor' => '',
            'pejabat_yang_mengeluarkan' => '',
        ];
    }

    public function render()
    {
        return view('livewire.pages.desa.sk', [
            'post' => DesaSk::where('desa_wisata_id', $this->desa)->paginate(10)
        ]);
    }
}
