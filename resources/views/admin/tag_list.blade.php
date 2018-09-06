@extends('admin.layouts.main')

@section('title', 'Теги')

@section('content')
<div class="card-panel text-grey-darken-4" style="width: 65rem">
        <h1>Список Тегов</h1>
        <hr> <br>
        @if ($tags->isEmpty())
            <p>Теги отсутствуют</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Имя Тега</th>
                        <th>Редактировать</th>
                        <th>Удаление</th>
                    </tr>
                </thead>
                    
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->name}}</td>
                            <td>
                                <a href="{{ route('tag.edit', $tag->id) }}">Редактировать</a>
                            </td>
                            <td>
                                <form action="{{ route('tag.destroy' , $tag->id) }}" id="delete-form-{{ $tag->id }}" method="post" style="display: none;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                <a href="" onclick=" if(confirm('Удалить?')) {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $tag->id }}').submit();
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
    <a class="waves-effect waves-light btn" href="{{ route ('tag.create') }}">Новый Тег</a>
@endsection
