@extends('dashboard.layouts.main')
@section('container')

            <h1>List of Category</h1>

            <div id="content">
            @foreach ($categories as $category)
                <li><a href="categories/{{ $category->slug }}">{{ $category->name }}</a></li>
            @endforeach
           

            </div>  
@endsection
