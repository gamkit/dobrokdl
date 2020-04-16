<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {

        $title = "Новости фонда";
        $posts = Post::news()->paginate(12);

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

    // 

    public function medianews() {

        $title = "Новости фонда";
        $posts = Post::medianews()->paginate(12);

        $data = [
            'title' => $title,
            'posts' => $posts,
        ];
        return view('news.index', $data);
    }

}
