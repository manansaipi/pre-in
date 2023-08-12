@extends('dashboard.layouts.main')
@section('container')
    
            <div id="content">
                <h1>{{ $post->title }}</h1>

                <p>By. {{ $user }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                {{ $post->body }}
                <a href="/charts">back</a>
            </div>
@endsection
