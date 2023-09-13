<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Serti extends Component
{
    public $devan;
    public $route;
    /**
     * Create a new component instance.
     */
    public function __construct($serti, $route = "serti.store")
    {
        $this->devan = $serti;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.serti');
    }
}
