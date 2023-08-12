<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('dashboard.contents.chart', [
            "title" => "Charts",
            "posts" => Post::all()
        ]);
    }
    public function show(Post $post)
    {
        return view('dashboard.contents.post', [
            "title" => "Charts",
            "post" => $post,
            "posts" => Post::all(),
        ]);
    }
}
