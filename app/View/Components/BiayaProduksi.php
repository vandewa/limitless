<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BiayaProduksi extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $devan;
    public $route;
    public function __construct($produksi, $route='biaya-produksi.store')
    {
        $this->devan = $produksi;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.biaya-produksi');
    }


}
