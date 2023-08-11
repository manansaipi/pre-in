<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
Route::get('/post/{slug}', [PostController::class, 'show']);

Route::get('/about', function () {
    return view('about', [
        "name" => "ben"
    ]);
});

Route::get('/login', function () {
    return view('login/login', [
        "name" => "ben"
    ]);
});
