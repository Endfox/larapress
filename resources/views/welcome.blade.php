<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    </head>
    <body>
        <div class="navbar-fixed">
            <nav class="grey darken-4">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">Larapress</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="">Registrate</a></li>
                        <li><a href="">Inicia Sesión</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="parallax-container center valign-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col s12 white-text">
                            <img src="{{asset('img/space.jpg')}}" width="150px" height="150px" class="circle z-depth-2">
                        <h2 class="white-text">Larapress.</h2>
                        <h4 class="white-text">Libertad para tú blog.</h4>
                    </div>
                </div>
            </div>
            <div class="parallax"><img src="{{asset('img/space.jpg')}}"></div>
        </div>
        <div class="row grey darken-3">
            <div class="container">
                <div class="row">
                    
                </div>
            </div>
        </div>
        <div class="section white">
            <div class="row container">
                <h3 class="header">Publicaciones realizadas.</h3>
            </div>
        </div>
        
    </div>
</body>
<script src="{{asset('js/materialize.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
</html>