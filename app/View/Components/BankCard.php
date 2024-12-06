<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BankCard extends Component
{
    public $titulo;
    public $cci;
    public $cuenta;

    public function __construct($titulo, $cci, $cuenta)
    {
        $this->titulo = $titulo;
        $this->cci = $cci;
        $this->cuenta = $cuenta;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bank-card');
    }
}
