<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Pajak extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $devan;
    public $route;
    public function __construct($pajak, $route='pajak.store')
    {
        $this->devan = $pajak;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pajak');
    }
}
