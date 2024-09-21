<?php

namespace App\Http\Controllers;

use Core\Controller;

class AboutController extends Controller {
    public function index() {
        $data = [];
        return $this->views->getView('Pages', 'about', $data);
    }
}