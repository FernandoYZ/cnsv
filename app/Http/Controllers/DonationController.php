<?php

namespace App\Http\Controllers;

use Core\Controller;

class DonationController extends Controller {
    public function index() {
        $data = [
            'title' => 'Donaciones',
            'description' => 'Apoya al Colegio Nuestra Señora del Valle con tu donación y ayuda a fortalecer la educación integral de nuestros estudiantes.',
        ];
        return $this->views->getView('Pages', 'donation', $data);
    }
}