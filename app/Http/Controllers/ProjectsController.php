<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
 
class ProjectsController extends Controller
{
    public function index() {

        $title = "Программы и проекты";

        $projects = Project::projects()->get();
        
        $programs = Project::programs()->get();

       
        $data = [
            "title" => $title,
            "projects" => $projects,
            "programs" => $programs,
        ];

        return view('projects.index', $data);
    }





    
    public function show($id, Request $request) {

        $title = "";
        $type = null;
       

        if(($request->type == "project") || ($request->type) == "program") {
            $type = $request->type;
        }
        else { abort(404); }
        
 
        $entity = Project::where('id', $id)->where('type', $type)->firstOrFail();

      
        // dd($entity);

        $data = [
            "title" => $title,
            "entity" => $entity,
        ];

        


        return view('projects.show', $data);
    }
}
