@extends('template')
@section('content')
    @foreach($articles as $article)
        <!-- Post preview-->
        <div class="post-preview">
            <a href="/blog/{{$article->id}}">
                <h2 class="post-title">{{$article->title}}</h2>
                <h3 class="post-subtitle">{{substr($article->content, 0, 90)}}...</h3>
            </a>
            <p class="post-meta">
                Posted by
                <a href="#!">{{$article->username}}</a>
                on {{$article->created_at}}
            </p>
        </div>
        <!-- Divider-->
        <hr class="my-4"/>
    @endforeach
@endsection
