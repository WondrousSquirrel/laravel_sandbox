@extends('admin.layouts.main')

@section('title', 'Теги: редактирование')
@section('content')
    <h1>Редактирование Тега</h1>

    <div class="row">
        <form class="col s12" action="{{ route('tag.update', $tag->id) }}" method="post" >
            {{ csrf_field() }}
            {{ method_field('PUT') }}
          
            <div class="row">
                <div class="input-field col s12">
                <input id="name" type="text" name="name"  value="{{ $tag->name }}">
                    <label for="name">Имя</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="slug" type="text" name="slug" value="{{ $tag->slug }}">
                    <label for="slug">Slug</label>
                </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
            <a href="{{ route('tag.index') }}">Назад</a>

        </form>
    </div>
      
@endsection