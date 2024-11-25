<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroButton extends Component
{
    public $contenido;
    public $url;
    public function __construct($contenido, $url)
    {
        $this-> contenido = $contenido;
        $this-> url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero-button');
    }
}
