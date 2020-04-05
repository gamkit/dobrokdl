<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        return view('about.index');
    }


    public function team() {
        return view('about.team');
    }


    public function founders() {
        return view('about.founders');
    }

    public function trustees() {
        return view('about.trustees');
    }
}
