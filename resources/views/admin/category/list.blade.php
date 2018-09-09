@extends('admin.layouts.main')

@section('title', 'Список постов')

@section('content')
<div class="card-panel text-grey-darken-4" style="width: 65rem">
        <h1>Список Категорий</h1>
        <hr> <br>
        @if ($categories->isEmpty())
            <p>Нет категорий</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Наименование Категории</th>
                        <th>Редактировать</th>
                        <th>Удаление</th>
                    </tr>
                </thead>
                    
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name}}</td>
                            <td>
                                <a href="{{ route('category.edit', $category->id) }}">Редактировать</a>
                            </td>
                            <td>
                                <form action="{{ route('category.destroy' , $category->id) }}" id="delete-form-{{ $category->id }}" method="post" style="display: none;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                <a href="" onclick=" if(confirm('Удалить?')) {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $category->id }}').submit();
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
    <a class="waves-effect waves-light btn" href="{{ route ('category.create') }}">Добавить категорию</a>
@endsection
