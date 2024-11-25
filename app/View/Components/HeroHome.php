<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroHome extends Component
{
    public $imagen;
    public $titulo;
    public $textButton;
    public $uriButton;
    public function __construct($imagen,$titulo,$textButton='',$uriButton='')
    {
        $this->imagen=$imagen;
        $this->titulo=$titulo;
        $this->textButton=$textButton;
        $this->uriButton=$uriButton;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero-home');
    }
}
