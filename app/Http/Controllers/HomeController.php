<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $periodos = [
            [
                'icono' => 'book',
                'label' => 'Periodo de Matrícula',
                'subtitulo' => '1 de marzo - 31 de marzo',
                'descripcion' => 'El plazo para las inscripciones estará abierto durante este período.'
            ],
            [
                'icono' => 'graduation',
                'label' => 'Periodo de Matrícula',
                'subtitulo' => '1 de abril - 30 de abril',
                'descripcion' => 'El plazo para las inscripciones estará abierto durante este período.'
            ]
        ];

        return view('pages.home', compact('periodos'));
    }
}
