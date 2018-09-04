@extends('admin.layouts.main')

@section('title', 'Список постов')

@section('content')
    <h1>Post List</h1>
    @if ($posts->isEmpty())
        <p>No posts</p>
    @else
        @foreach ($posts as $post)
            <p> {{ $post->title }}</p> 
        @endforeach
    @endif
    <a href="{{ route ('post.create') }}">create post</a>
@endsection