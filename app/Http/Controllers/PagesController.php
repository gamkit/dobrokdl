<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Volunteer;
use App\Post;
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

            case 'donorstvo-v-licah':
                return $this->donors();
                break;

            case 'o-nas-pishut':
                return $this->mediaAboutDonors();
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
        $volunteers = Volunteer::all();


        $data = [
            'title' => $title,
            'page' => $page,
            'volunteers' => $volunteers,
        ];

        return view('pages.volunteers', $data);
    }
    // 

    public function donors() {

        $title = "Донорство в лицах";
        $posts = Post::donors()->paginate(12);

        $data = [
            'title' => $title,
            'posts' => $posts,
        ];
        return view('news.index', $data);
    }
    // 

    public function mediaAboutDonors() {

        $title = "О нас пишут";
        $posts = Post::mediaAboutDonors()->paginate(12);

        $data = [
            'title' => $title,
            'posts' => $posts,
        ];
        return view('news.index', $data);
    }

    
}
