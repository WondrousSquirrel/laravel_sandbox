@extends('admin.layouts.main')

@section('title', 'Пост: создание')
@section('content')
<div class="row">
    @include('includes.messages')
    <h2 style="text-align: center;">Создание поста</h2>
    <form class="col s12 card-panel white" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data" style="margin-left:5%;">
        {{ csrf_field() }}
       <div class="container">

            <div class="row">
                <div class="input-field col m10">
                    <input id="title" type="text" name="title" class="validate">
                    <label for="title">Заголовок</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col m10">
                    <input id="body" type="text" name="body" class="validate">
                    <label for="body">Текст</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col m10">
                    <input id="slug" type="text" name="slug" class="validate">
                    <label for="slug">Slug</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col m5">
                    <select name="tags[]">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <label>Выберите Категорию</label>
                </div>

                <div class="input-field col m5">
                    <select multiple name="categories[]">
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}"> {{ $tag->name }}</option>
                        @endforeach
                    </select>
                    <label>Теги</label>
                  </div>

            </div>


            <!--
            <div class="row">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="image">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </div>
        -->

        </div>
        <div class="col offset-m4">
            <div class="section">
                <button class="btn waves-effect waves-light center-align" type="submit" name="action" style="margin-right: 5px">Создать</button>
                <a class="waves-effect waves-light btn right" href="{{ route('post.index') }}">Назад</a>
            </div>
        </div>
    </form>


</div>

@endsection
