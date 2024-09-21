<?php

namespace App\Http\Controllers;

use Core\Controller;

class VisitController extends Controller {
    public function index() {
        $data = [];
        return $this->views->getView('Pages', 'visit', $data);
    }
}