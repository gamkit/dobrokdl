<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index() {
        return view('reports.index');
    }


    public function media() {
        return view('reports.media');
    }


    public function financial() {
        return view('reports.financial');
    }
}
