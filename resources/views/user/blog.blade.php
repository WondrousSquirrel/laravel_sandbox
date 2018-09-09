@extends('user.layouts.main')
@section('title', 'Главная')
@section('content')
    <h1>Блог</h1>
    @foreach ($posts as $post)
      {{ $post->title }}
    @endforeach
@endsection
