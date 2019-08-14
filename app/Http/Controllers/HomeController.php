<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        $msg = Controller::greeting();
        echo $msg;
    }
}