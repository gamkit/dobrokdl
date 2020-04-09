<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
class PagesController extends Controller
{
    
    public function show($slug) {

        

        switch ($slug) {
            case 'contacts':
                return $this->contacts();
                break;
            
            case 'volunteers':
                return $this->volunteers();
                break;
            
            default:
                # code...
                break;
        }


        $page = Page::where('slug', $slug)->firstOrFail();

        $title = $page->title;

        $data = [
            'title' => $title,
            'page' => $page,
        ];
        return view('pages.show', $data);
    }


    // 

    public function contacts() {

       
        
        $page = Page::where("slug", "contacts")->firstOrFail();
        $title = $page->title;
        
        $data = [
            'title' => $title,
            'page' => $page,
        ];

        return view('pages.contacts', $data);
    }
    // 

    public function volunteers() {

        $page = Page::where("slug", "volunteers")->firstOrFail();
        $title = $page->title;

        $data = [
            'title' => $title,
            'page' => $page,
        ];

        return view('pages.volunteers', $data);
    }
}
