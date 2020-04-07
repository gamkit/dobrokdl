<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {

        $title = "Программы и проекты";
        $data = [
            "title" => $title,
        ];

        return view('projects.index', $data);
    }
}
