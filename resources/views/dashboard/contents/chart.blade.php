@extends('dashboard.layouts.main')
@section('container')
    
            <div id="content">
            @foreach ($posts as $post)
                <a href="post/{{ $post->slug }}"><h1>{{ $post->title }}</h1></a>
                <h3>by: {{ $post->author->name }} in <a href="categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h3>
                <p>{{ $post->body }}</p>
            @endforeach
           

            </div>  
@endsection
