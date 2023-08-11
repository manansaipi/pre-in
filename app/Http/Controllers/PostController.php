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
    public function show($slug)
    {
        return view('dashboard.contents.post', [
            "title" => "Charts",
            "post" => Post::find($slug),
            "posts" => Post::all(),
        ]);
    }
}
