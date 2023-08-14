@extends('dashboard.layouts.main')
@section('container')

            <h1>Post by {{ $postBy }} : {{ $name }}</h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="/charts" method="GET">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div id="content">
            @foreach ($posts as $post)
                <a href="post/{{ $post->slug }}"><h1>{{ $post->title }}</h1></a>
                <h3>by: <a href="/authors/{{ $post->author->id }}">{{ $post->author->name }}</a> in <a href="charts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></h3>
                <p>{{ $post->body }}</p>
            @endforeach
           

            </div>  
@endsection
