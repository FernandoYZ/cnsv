<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SecundaryCard extends Component
{
    public $titulo;
    public $icono;
    public function __construct($titulo='', $icono='')
    {
        $this->titulo = $titulo;
        $this->icono = $icono;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.secundary-card');
    }
}
