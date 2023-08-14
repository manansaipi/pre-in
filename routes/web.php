<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard.contents.home', [
        "title" => "Home"
    ]);
});

Route::get('/charts', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);
Route::get('/categories/{category:slug}', [PostController::class, 'showByCat']);

Route::get('/categories', [PostController::class, 'categories']);

Route::get('/authors/{author:id}', function (User $author) {
    return view('dashboard.contents.chart', [
        // dd($author->posts),
        "title" => "Charts",
        "posts" => $author->posts,
        "postBy" => "Author",
        "name" => $author->name,
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "ben"
    ]);
});

Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [LoginController::class, 'register']);
Route::post('/register', [LoginController::class, 'store']);
