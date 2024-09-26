<?php

namespace App\Http\Controllers;

use Core\Controller;

class AdmissionController extends Controller {
    public function index() {
        $data = [
            'title' => 'Admisión',
            'description' => 'Infórmate sobre el proceso de admisión en el Colegio Nuestra Señora del Valle y cómo formar parte de nuestra comunidad educativa.',
        ];
        return $this->views->getView('Pages', 'admission', $data);
    }
}