@extends('template')
@section('content')
    <form action="/updateArticle" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$article->id}}">
        <div class="mb-3">
            <label for="">Заголовок</label>
            <input value="{{$article->title}}" type="text" name="title" class="form-control" placeholder="Заголовок">
        </div>
        <div class="mb-3">
            <label for="">Контент</label>
            <textarea class="form-control" name="contentField" placeholder="Контент">{{$article->content}}</textarea>
        </div>
        <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary" value="Сохранить">
        </div>
    </form>
@endsection
