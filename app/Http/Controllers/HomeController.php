<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        \Log::debug("HomeController::index()");
        return view('home.index');
    }
}
