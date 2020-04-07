<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class NewsController extends Controller
{
    public function index() {

        $title = "Новости фонда";
        $posts = Post::orderBy("created_at", "desc")->where("status", "=", "published")->paginate(12);

        $data = [
            'title' => $title,
            'posts' => $posts,
        ];
        return view('news.index', $data);
    }


    public function show($id) {

        $post = Post::findOrFail($id);
        $title = $post->title;
        
      

        $data = [
            'title' => $title,
            'post' => $post,
        ];

        return view('news.show', $data);
    }
}
