<?php

namespace App\Http\Controllers;

use Core\Controller;

class AdmissionController extends Controller {
    public function index() {
        $data = [];
        return $this->views->getView('Pages', 'admission', $data);
    }
}