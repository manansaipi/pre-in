@extends('dashboard.layouts.main')
@section('container')
    <form action="/dashboard/posts/{{ $post->id }}" method="post">
    @method('patch');
    @csrf
        <input type="text" value="{{ old('title', $post->title) }}" name="title"  placeholder="title">
        <input type="text" value="{{ old('slug', $post->slug) }}" name="slug"  placeholder="title">
        <br>
        {{-- <input type="textarea" name="" id="" placeholder="content"> --}}
        <textarea name="body" cols="30" rows="10" >{{ old('body', $post->body) }}</textarea>
        <button type="submit">Submit</button>
    </form>
@endsection
