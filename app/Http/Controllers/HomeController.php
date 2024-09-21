<?php

namespace App\Http\Controllers;

use Core\Controller;

class HomeController extends Controller {
    public function index() {
        $data = [];
        return $this->views->getView('Pages', 'home', $data);
    }
}