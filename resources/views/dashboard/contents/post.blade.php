@extends('dashboard.layouts.main')
@section('container')
    
            <div id="content">
                <h1>{{ $post->title }}</h1>
                <h3>by: {{ $post->author }}</h3>
                {{ $post->body }}
                <a href="/charts">back</a>
            </div>
@endsection
