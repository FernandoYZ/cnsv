<?php

namespace App\Http\Controllers;

use Core\Controller;

class DonationController extends Controller {
    public function index() {
        $data = [];
        return $this->views->getView('Pages', 'donation', $data);
    }
}