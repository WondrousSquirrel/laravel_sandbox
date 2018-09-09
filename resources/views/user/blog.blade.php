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
                    <img class="center-cropped" src="https://images.unsplash.com/photo-1536420111820-d84dee5c90c5?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d76602c3cafa0599d42cfdf255c5eb8d&auto=format&fit=crop&w=700&q=80">
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
