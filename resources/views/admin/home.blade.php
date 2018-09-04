@extends('admin.layouts.main')
@section('title', 'Админка')
@section('content')
    <h1>Admin Home</h1>
    <a href="{{ route ('post.index') }}">posts</a>
@endsection