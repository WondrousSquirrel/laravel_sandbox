@extends('user.layouts.main')
@section('title', 'Главная')
@section('content')
    <h1>Блог</h1>

<div class="row">
  @foreach ($posts as $post)
    <div class="col s4">

            <div class="card">
              <a href="#!">
                <div class="card-image">

                    <img class="center-cropped" src="{{ asset(Storage::disk('local')->url($post->image)) }}" id="Image" name="Image" alt="image">
                </div>
            </a>
              <div class="card-body">
                  <span class="card-title"><p>{{ $post->title }}</p></span>
                  <div class="card-content grey-text ">
                      <p>I am a very simple card. I am good at containing small bits of information.
                     I am convenient because I require little markup to use effectively.</p>
                  </div>
              </div>
            </div>
    </div>
  @endforeach
</div>




@endsection
