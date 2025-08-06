<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts</title>
</head>
<body>
    <h1>Lista de Posts</h1>

    @if($posts->isEmpty())
        <p>No hay posts aún.</p>
    @else
        <ul>
            @foreach($posts as $post)
                <li>
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
