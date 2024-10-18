@extends('template')
@section('content')
    <form action="/addArticle" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Заголовок</label>
            <input type="text" name="title" class="form-control" placeholder="Заголовок">
        </div>
        <div class="mb-3">
            <label for="">Контент</label>
            <textarea class="form-control" name="contentField" placeholder="Контент"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary" value="Добавить статью">
        </div>
    </form>
@endsection
