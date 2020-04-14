<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;

class DocumentsController extends Controller
{
    public function index() {

        $title = "Документы фонда";
        $docs = Document::all();

        $data = [
            'title' => $title,
            'docs' => $docs
        ];

        // dd($docs[0]->size);
        // echo phpinfo(); die();
        return view('documents', $data);
    }
}
