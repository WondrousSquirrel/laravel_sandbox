@extends('admin.layouts.main')

@section('title', 'Пост: редактирование')
@section('content')
<div class="row">
    @include('includes.messages')
    <h2 style="text-align: center;">Редактирование поста</h2>
    <form class="col s12 card-panel white" action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data" style="margin-left:5%;">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
       <div class="container">
              
            <div class="row">
                <div class="input-field col m10">
                    <input id="title" type="text" name="title" value="{{ $post->title }}">
                    <label for="title">Title</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col m10">
                    <input id="body" type="text" name="body" value="{{ $post->body }}">
                    <label for="body">Body</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col m10">
                    <input id="slug" type="text" name="slug" value="{{ $post->slug }}">
                    <label for="slug">Slug</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col m5">
                    <select name="categories[]">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                @foreach ($post->categories as $postCategory)
                                    @if($postCategory->id == $category->id) 
                                        selected
                                    @endif
                                @endforeach
                            >
                            {{ $category->name }}</option>
                        @endforeach
                    </select>
                    <label>Выберите Категорию</label>
                </div>

                <div class="input-field col m5">
                    <select multiple name="tags[]">
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}" 
                                @foreach($post->tags as $postTag)
                                    @if($postTag->id == $tag->id)
                                        selected
                                    @endif
                                @endforeach 
                            > 
                            {{ $tag->name }}</option>
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
                <button class="btn waves-effect waves-light center-align" type="submit" name="action" style="margin-right: 5px">Обновить</button>
                <a class="waves-effect waves-light btn right" href="{{ route('post.index') }}">Назад</a>
            </div>
        </div>
    </form>


</div>

@endsection