<?php

namespace App\Http\Controllers;

use Core\Controller;

class AboutController extends Controller {
    public function index() {
        $data = [
            'title' => '¿Quiénes somos?',
            'description' => 'Conoce el Colegio Nuestra Señora del Valle, donde promovemos una educación integral y valores en un ambiente acogedor y familiar.'
        ];
        return $this->views->getView('Pages', 'about', $data);
    }
}