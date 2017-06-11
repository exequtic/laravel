<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://bootswatch.com/slate/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .fontl {font-family: 'Roboto Condensed', sans-serif; font-weight: 300;}
        .fontb {font-family: 'Roboto Condensed', sans-serif; font-weight: 500;}
        .mycontainer {max-width: 768px; margin-right: auto; margin-left: auto; margin-top: 70px; padding-left: 50px; padding-right: 50px;}
        ul.icon {list-style-type: none;}
        ul.icon li:before {font-family: 'Glyphicons Halflings'; content: "\e092"; float: left; width: 20px;}
        i.glyphicon {width: 20px;}
    </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <span class="navbar-brand">Project</span>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav fontb">
                    <li @if (Route::getCurrentRoute()->getName() === 'index') {!! 'class="active"' !!} @endif><a href="{{ url('/') }}"><i class="glyphicon glyphicon-home"></i>Главная</a></li>
                    <li @if (strpos(Route::getCurrentRoute()->getName(), 'comments.') === 0) {!! 'class="active"' !!} @endif><a href="{{ url('comments') }}"><i class="glyphicon glyphicon-pencil"></i>Комментарии</a></li>
                    <li @if (Route::getCurrentRoute()->getName() === 'about') {!! 'class="active"' !!} @endif><a href="{{ url('about') }}"><i class="glyphicon glyphicon-info-sign"></i>Информация</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mycontainer well fontl">
        @section('content')
        @show
    </div>
    <footer class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <p class="navbar-text">&#169; 2017</p>
        </div>
    </footer>
</body>
</html>