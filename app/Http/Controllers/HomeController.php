<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Collect;
use App\Collectreport;
use App\Partner;

class HomeController extends Controller
{
    public function index() {
        
        $title = "Главная";

        $urgentCollects = Collect::urgentCollects()->get();
        $collects = Collect::someCollects(12)->get()->merge($urgentCollects)->reverse();

        $posts = Post::lastPosts(12)->get();

        $collectreports = Collectreport::take(3)->get();

        $partners = Partner::all();

        $data = [
            'title' => $title,
            'collects' => $collects,
            'posts' => $posts,
            'collectreports' => $collectreports,
            'partners' => $partners,
        ];

        return view('home', $data);
    }
}
