<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaNewsController extends Controller
{
    public function index() {
        return view('medianews');
    }
}
