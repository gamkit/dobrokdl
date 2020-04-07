<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collect;

class CollectsController extends Controller
{
    
    public function index() {

        $title = "Сборы";
        $collects = Collect::orderBy("updated_at", "desc")->paginate(16);

       

        

        $data = [
            'title' => $title,
            'collects' => $collects,
        ];

        
        return view('collects.index', $data);
    }

    public function urgent() {

        $title = "Срочные сборы";
        $collects = Collect::urgentCollects()->paginate();

  

        $data = [
            'title' => $title,
            'collects' => $collects,
        ];

        
        return view('collects.index', $data);
    }

    public function show($id) {

        $collect = Collect::findOrFail($id);
        $title = "Сбор № $collect->id";
        
      

        $data = [
            'title' => $title,
            'collect' => $collect,
        ];

        return view('collects.show', $data);
    }
}
