<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

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
            "user" => "ben",
        ]);
    }
    public function showByCat(Category $category)
    {
        return view('dashboard.contents.category', [
            'title' => $category->name,
            'posts' => $category->posts,
            'category' => $category->name,
        ]);
    }
    public function categories()
    {
        return view('dashboard.contents.categories', [
            'title' => "Charts",
            'categories' => Category::all()
        ]);
    }
}
