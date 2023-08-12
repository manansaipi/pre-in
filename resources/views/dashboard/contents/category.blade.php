@extends('dashboard.layouts.main')
@section('container')

            <h1>Post Category : {{ $category }}</h1>

            <div id="content">
            @foreach ($posts as $post)
                <a href="post/{{ $post->slug }}"><h1>{{ $post->title }}</h1></a>
                <h3>by: {{ $post->author }}</h3>
                <p>{{ $post->body }}</p>
            @endforeach
           

            </div>  
@endsection
