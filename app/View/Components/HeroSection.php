<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroSection extends Component
{
    public $nombreImagen;
    public $titulo;
    public $contenido;
    public $textButton;
    public $uriButton;

    public function __construct($nombreImagen, $titulo, $contenido = '', $textButton = '', $uriButton = '')
    {
        $this->nombreImagen = $nombreImagen;
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->textButton = $textButton;
        $this->uriButton = $uriButton;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero-section');
    }
}
