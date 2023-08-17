<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use tidy;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // url : dashboard/posts & method : get
        return "woy in index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // url : dashboard/posts/cretae & method : get
        return view('dashboard.contents.create', [
            "title" => "Charts",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // url : dashboard/posts & method : post
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        $validatedData['category_id'] = mt_rand(1, 3);
        $validatedData['slug'] = $request->title;
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = $request->body;

        Post::create($validatedData);
        return redirect('/charts')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // url : dashboard/posts/{{ $id }} & method : get
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        // return $post->body;
        // url : dashboard/posts/{{ $id }}/edit & method : get
        return view('dashboard.contents.edit', [
            'post' => $post,
            'title' => 'charts'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // url : dashboard/posts & method : put
        //create the rule for validation
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required'
        ];
        // if use chage the slug, add validation to the slug
        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }
        //validate all suer request using the reles that hasbeen created
        $validatedData = $request->validate($rules);
        // add another field to update in db cause using put so it required to fill in db. if does not have value it will update blank or empty. so use patch to not update everything instead of update everything  
        // $validatedData['category_id'] = mt_rand(1, 3);
        // $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['excerpt'] = $request->body;
        Post::where('id', $post->id)->update($validatedData);
        return redirect('/charts')->with('success', 'New post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // url : dashboard/posts & method : delete
        // <form action="/dashboard/posts" method="post">
        //             @method('delete') -> cause in form can only get & post
        Post::destroy($post->id);
        return redirect('/charts')->with('success', 'Post has been DELETED!');
    }
}
