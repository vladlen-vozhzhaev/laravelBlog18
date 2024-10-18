@extends('template')
@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label for="">Имя</label>
            <input name="name" type="text" class="form-control" placeholder="Имя">
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input name="email" type="email" class="form-control" placeholder="Email">
        </div>
        <div class="mb-3">
            <label for="">Пароль</label>
            <input name="password" type="password" class="form-control" placeholder="Пароль">
        </div>
        <div class="mb-3">
            <label for="">Подтверждение пароля</label>
            <input name="password_confirmation" type="password" class="form-control" placeholder="Подтверждение пароля">
        </div>
        <input type="submit" class="form-control btn btn-primary" value="Зарегистрироваться">
    </form>
@endsection
