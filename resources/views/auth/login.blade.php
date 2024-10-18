@extends('template')
@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="">Email</label>
            <input name="email" type="email" class="form-control" placeholder="Email">
        </div>
        <div class="mb-3">
            <label for="">Пароль</label>
            <input name="password" type="password" class="form-control" placeholder="Пароль">
        </div>
        <input type="submit" class="form-control btn btn-primary" value="Авторизоваться">
    </form>
@endsection
