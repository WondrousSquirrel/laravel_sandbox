<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Post</h1>
    @foreach ($posts as $post) 
        <p>
            $post->title
        </p>
    @endforeach

    <a href="{{ route('post.create') }}">Add New</a>
</body>
</html>