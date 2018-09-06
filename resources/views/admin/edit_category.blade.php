@extends('admin.layouts.main')

@section('title', 'Категории: редактирование')
@section('content')
    <h1>Редактирование Тега</h1>

    <div class="row">
        <form class="col s12" action="{{ route('category.update', $category->id) }}" method="post" >
            {{ csrf_field() }}
            {{ method_field('PUT') }}
          
            <div class="row">
                <div class="input-field col s12">
                <input id="name" type="text" name="name"  value="{{ $category->name }}">
                    <label for="name">Название</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="slug" type="text" name="slug" value="{{ $category->slug }}">
                    <label for="slug">Slug</label>
                </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Обновить
                <i class="material-icons right">send</i>
            </button>
            <a href="{{ route('category.index') }}">Назад</a>

        </form>
    </div>
      
@endsection