<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Omzet extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $devan;
    public $route;
    public function __construct($omzet, $route='omzet.store')
    {
        $this->devan = $omzet;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.omzet');
    }
}
