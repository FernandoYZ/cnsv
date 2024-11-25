<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PrimaryButton extends Component
{
    public $uri;
    public $contenido;
    public $tipo;

    public function __construct($uri, $contenido, $tipo="")
    {
        $this->uri = $uri;
        $this->contenido = $contenido;
        $this->tipo = $tipo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.primary-button');
    }
}
