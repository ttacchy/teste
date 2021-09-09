<html>
    <head>
        <title>Olá Mundo - @yield('title')</title>
        {{Html::style('css/bootstrap.min.css')}}
        {{Html::style('css/bootstrap-theme.min.css')}}
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        {{Html::style('js/jquery-3.6.0.min.js')}}
        {{Html::style('js/bootstrap.min.js')}}
    </body>
</html>
