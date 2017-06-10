@extends('layouts.layout')
@section('content')
    <h3>Всего комментариев: {{ $comments->count() }}<a href="comments/create" class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i>Добавить</a></h3><br>
    @foreach($comments as $comment)
    <div class="messages">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">
                    <span style="font-weight: bold">{{ $comment->name }} &emsp;</span><span style="font-size: 11px;">{{ $comment->email }}</span>
                    <span class="pull-right label label-primary">{{ $comment->created_at}}</span>
                </div>
            </div>
            <div class="panel-body">{{ $comment->msg }}
{{--                <br>
                <div class="pull-right">
                    <a href="" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>
                </div>--}}
            </div>
        </div>
    </div>
    @endforeach
    <div class="col-lg-10 col-lg-offset-4">
    <ul class="pagination pagination-sm">
        <li class="disabled"><a href="#">&laquo;</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>
    </div>
@endsection