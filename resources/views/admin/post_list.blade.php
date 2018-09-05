@extends('admin.layouts.main')

@section('title', 'Список постов')

@section('content')
<div class="card-panel text-grey-darken-4" style="width: 65rem">
        <h1>Список постов</h1>
        <hr> <br>
        @if ($posts->isEmpty())
            <p>No posts</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Имя поста</th>
                        <th>Редактировать</th>
                        <th>Удаление</th>
                    </tr>
                </thead>
                    
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title}}</td>
                            <td>
                                <a href="{{ route('post.edit', $post->id) }}">Редактировать</a>
                            </td>
                            <td>
                                <form action="{{ route('post.destroy' , $post->id) }}" id="delete-form-{{ $post->id }}" method="post" style="display: none;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                <a href="" onclick=" if(confirm('Удалить?')) {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $post->id }}').submit();
                                    } else {
                                        event.preventDefault()
                                    }
                                    ">Удалить</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <a class="waves-effect waves-light btn" href="{{ route ('post.create') }}">Создать пост</a>
@endsection
