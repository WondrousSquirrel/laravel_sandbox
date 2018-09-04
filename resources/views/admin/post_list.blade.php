@extends('admin.layouts.main')

@section('title', 'Список постов')

@section('content')
    <div class="container">


        <div class="row">
            <div class="col">
                <div class="card white" style="width: 65rem;">
                    <div class="card-content text-grey-darken-4">
                        <span class="card-title large" >Список постов</span>
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
                                            <td>Удалить</td>
                                            <td>Редактировать</td>
                                        
                                    @endforeach
                                  </tr>
                                </tbody>
                              </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route ('post.create') }}">create post</a>
    </div>

@endsection