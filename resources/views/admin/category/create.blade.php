@extends('admin.layouts.main')

@section('title', 'Создания поста')
@section('content')
<div class="row">
    <h2 style="text-align: center;">Добавление Категории</h2>
    <form class="col s12 card-panel white" action="{{ route('category.store') }}" method="post" enctype="multipart/form-data" style="margin-left:5%;">
        {{ csrf_field() }}
       <div class="container">

            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="name" class="validate">
                    <label for="name">Имя Категории</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="slug" type="text" name="slug" class="validate">
                    <label for="slug">Slug</label>
                </div>
            </div>

            <button class="btn waves-effect waves-light left" type="submit" name="action">Добавить
                <i class="material-icons right">send</i>
            </button>
            <a class="waves-effect waves-light btn right" href="{{ route('category.index') }}">Назад</a>
            <div class="section"></div>
            <div class="section"></div>
        </div>
    </form>
</div>

@endsection
