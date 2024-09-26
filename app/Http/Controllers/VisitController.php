<?php

namespace App\Http\Controllers;

use Core\Controller;

class VisitController extends Controller {
    public function index() {
        $data = [
            'title' => 'Visítanos',
            'description' => 'Visítanos en el Colegio Nuestra Señora del Valle y descubre nuestra propuesta educativa en un entorno residencial.',
        ];
        return $this->views->getView('Pages', 'visit', $data);
    }
}