@extends('dashboard.layouts.main')
@section('container')
    <form action="/dashboard/posts" method="post">
    @csrf
        <input type="text" name="title"  placeholder="title">
        <br>
        {{-- <input type="textarea" name="" id="" placeholder="content"> --}}
        <textarea name="body" cols="30" rows="10"></textarea>
        <button type="submit">Submit</button>
    </form>
@endsection
