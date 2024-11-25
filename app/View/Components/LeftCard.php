<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LeftCard extends Component
{
    public $imagen;
    public $titulo;

    public function __construct($imagen, $titulo)
    {
        $this->imagen = $imagen;
        $this->titulo = $titulo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.left-card');
    }
}
