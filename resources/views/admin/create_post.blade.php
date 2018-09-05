@extends('admin.layouts.main')

@section('title', 'Создания поста')
@section('content')
<div class="row">
    <h2 style="text-align: center;">Create Post</h2>
    <form class="col s12 card-panel white" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data" style="margin-left:5%;">
        {{ csrf_field() }}
       <div class="container">
              
            <div class="row">
                <div class="input-field col s12">
                    <input id="title" type="text" name="title" class="validate">
                    <label for="title">Title</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="body" type="text" name="body" class="validate">
                    <label for="body">Body</label>
                </div>
            </div>

            <button class="btn waves-effect waves-light left" type="submit" name="action">Подтвердить
                <i class="material-icons right">send</i>
            </button>
            <a class="waves-effect waves-light btn right" href="{{ route('post.index') }}">Назад</a>
            <div class="section"></div>
        </div>
    </form>
</div>

@endsection