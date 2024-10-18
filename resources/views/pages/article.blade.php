@extends('template')
@section('content')
    <h2>{{$article->title}}</h2>
    <div>{{$article->content}}</div>
    <p>Опубликовал {{$article->author_id}} {{$article->created_at}}</p>
    @auth
        <a class="btn btn-primary" href="/updateArticle/{{$article->id}}">Редактировать</a>
        <a class="btn btn-primary" href="/delete/{{$article->id}}">Удалить</a>
    @endauth
@endsection
