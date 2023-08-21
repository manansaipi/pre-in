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
            "active" => "Charts",
            // "posts" => Post::all()
            // "posts" => Post::with(['author', 'category'])->latest()->get(), // eager loading to fix n+1 problem
            "posts" =>  Post::latest()->filter(request(['search', 'category']))->get(), // eager loading to fix n+1 problem but already do in model os no need 'with' in here anymore
            "postBy" => "all",
            "name" => "all"
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
        return view('dashboard.contents.chart', [
            'title' => $category->name,
            'posts' => $category->posts->load('category', 'author'), // lazy eager loading to fix n+1 problem
            'name' => $category->name,
            'postBy' => "Category",
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
