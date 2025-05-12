<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\JewelryLogger;
use App\Services\ActivityTracking;


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
    public function catalog2 ()
    {
        return view('catalog2');
    }
    public function catalog3 ()
    {
        return view('catalog3');
    }
    public function gifts ()
    {
        return view('gifts');
    }
}
