@extends('user.layouts.main')
@section('title', 'Главная')
@section('content')
    <h1>Блог</h1>

<div class="row">
    <div class="col s12 m7">
        @foreach ($posts as $post)
            <div class="card">
              <a href="#!">
                  <div class="card-image">
                      <img src="https://images.unsplash.com/photo-1536420111820-d84dee5c90c5?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d76602c3cafa0599d42cfdf255c5eb8d&auto=format&fit=crop&w=700&q=80">
                      <span class="card-title">{{ $post->title }}</span>
                  </div>
              </a>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>
        @endforeach
    </div>
</div>




@endsection
