<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // View home.blade.php
    public function home()
    {
        return view('home/home');
    }

    // View library.blade.php
    public function library()
    {
        return view('home/library');
    }

    // View clubs.blade.php
    public function clubs()
    {
        return view('home/clubs');
    }

    // View catalogue.blade.php
    public function catalogue()
    {
        return view('home/catalogue');
    }
}
