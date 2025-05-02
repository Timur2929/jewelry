<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        return view('glavnaya');
    }
    public function about ()
    {
        return view('about');
    }
    public function selected ()
    {
        return view('selected');
    }
    public function catalog ()
    {
        return view('catalog');
    }
}
