@extends('admin.layouts.main')

@section('title', 'Создания поста')
@section('content')
    <h1>Create Post</h1>

    <div class="row">
        <form class="col s12" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data" >
            {{ csrf_field() }}
          
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

            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>

        </form>
    </div>
      
@endsection