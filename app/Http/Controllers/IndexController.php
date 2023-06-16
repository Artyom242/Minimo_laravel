<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::all()->take(4);
        $postsBeforeSign = Post::all()->skip(4)->take(2);
        return view('post.index', compact('posts','postsBeforeSign'));
    }

    public function post(Post $post)
    {
        return view('post.post', compact('post'));
    }

    public function about()
    {
        return view('post.about');
    }
}
