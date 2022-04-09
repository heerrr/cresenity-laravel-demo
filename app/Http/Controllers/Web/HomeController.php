<?php

namespace App\Http\Controllers\Web;

use CApp;
use App\Http\Controllers\Controller;

class HomeController extends Controller {
    public function show() {
        $app = CApp::instance();
        $app->setView('page');

        return $app;
    }
}
