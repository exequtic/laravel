@extends('layouts.layout')
@section('content')
    <h2 align="center">Написать комментарий</h2>
    <h6 align="center">Вы можете оставить свои предложения, пожелания, жалобы.</h6><br>
    <form class="form-horizontal" action="{{ route('comments.store') }}" method="POST">
        {{ csrf_field() }}
        <fieldset>
            <div class="input-group">
                <span class="input-group-addon input-sm"><i class="glyphicon glyphicon-user"></i></span>
                <input class="form-control input-sm" type="text" name="name" placeholder="Ваше имя" value="{{ Request::get('name') }}">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon input-sm"><i class="glyphicon glyphicon-envelope"></i></span>
                <input class="form-control  input-sm" type="text" name="email" placeholder="Ваша почта">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon input-sm"><i class="glyphicon glyphicon-align-justify"></i></span>
                <textarea class="form-control input-sm" name="msg" rows="5" maxlength="500" placeholder="Комментарий"></textarea>
            </div><br>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-4">
                    <a href="/comments" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Назад</a>
                    <button type="reset" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i>Сбросить</button>
                    <button type="submit" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-ok"></i>Отправить</button>
                </div>
            </div>
        </fieldset>
    </form>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <ul>
                <li>{{ $error }}</li>
            </ul>
        @endforeach
        </div>
    @endif
@endsection