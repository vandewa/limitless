<?php

namespace App\View\Components;

use App\Models\Organisasi;
use Illuminate\View\Component;

class DetailOrganisasi extends Component
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
        $this->data = Organisasi::find($id);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.detail-organisasi', [
            'data' => $this->data
        ]);
    }
}
