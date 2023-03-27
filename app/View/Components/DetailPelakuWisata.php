<?php

namespace App\View\Components;

use App\Models\PelakuWisata;
use Illuminate\View\Component;
use App\Models\Subsektor;
use App\Models\SubsektorEkraf;

class DetailPelakuWisata extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $data;
    public $id;

    public function __construct($id)
    {
        $this->id = $id;
        $this->data = PelakuWisata::find($id);
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.detail-pelaku-wisata', [
            'data' => $this->data,
            'subsektornya' => SubsektorEkraf::with('subsektornya')->where('ekraf_id', $this->id)->get()->pluck('subsektornya.id'),
            'subsektor' => Subsektor::orderBy('nama_subsektor', 'asc')->pluck('nama_subsektor', 'id')
        ]);

    }
}
