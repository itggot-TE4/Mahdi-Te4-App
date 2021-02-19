<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="{{ url('/news/create')}}">creat</a>
@foreach ($news as $article)
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->body }}</p>
    <a href="{{ route('news.show', ['id' =>$article->id])}}">show article</a>
@endforeach

</body>
</html>