<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function beranda()
    {
        return view('page.beranda');
    }

    public function asosiasi()
    {
        return view('page.asosiasi');
    }

    public function jasa()
    {
        return view('page.jasa');
    }

    public function katalog()
    {
        return view('page.katalog');
    }
}
