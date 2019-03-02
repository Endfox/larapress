<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Larapress</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    </head>
    <body>
        <div class="navbar-fixed">
            <nav class="grey darken-4">
                <div class="nav-wrapper">
                    <a href="{{route('home')}}" class="brand-logo">Larapress</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="modal-trigger waves-effect" href="#modal1">Registrate</a></li>
                        <li><a class="modal-trigger waves-effect" href="#modal2">Inicia Sesión</a></li>
                    </ul>
                    <form action="">
                        <div class="input-field">
                            <input placeholder="Buscar una publicación..." id="search" type="search" required>
                            <label class="label-icon" for="search">
                                <i class="material-icons">search</i>
                            </label>
                        </div>
                    </form>
                    
                </div>
            </nav>
        </div>
        <div class="parallax-container center valign-wrapper">
            <div class="parallax"><img src="{{asset('img/space.jpg')}}"></div>
            <div class="container">
                <div class="row">
                    <div class="col s12 white-text">
                        <img src="{{asset('img/space.jpg')}}" width="150px" height="150px" class="circle z-depth-2">
                        <h2 class="white-text">Larapress.</h2>
                        <h4 class="white-text">Libertad para el programador.</h4>
                        <h5 class="white-text">"Hecho con Laravel y materializecss".</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row grey darken-3">
            <div class="container">
                <div class="row" id="nav">
                    @foreach($pages as $page)
                    <div class="col s2">
                        <a class="white-text" href="{{route('home')}}">
                            {{$page->name}}
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container hide-on-large-only">
            <div class="row center">
                <div class="col xl3"></div>
                <div class="col s11">
                    <form action="">
                        <div class="input-field">
                            <i class="material-icons prefix">search</i>
                            <input placeholder="" type="text" id="icon_search" name="search">
                            <label for="search" id="icon_search">Buscar una publicación...</label>
                        </div>
                    </form>
                </div>
                <div class="col s1"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                
            </div>
        </div>
        <div id="modal1" class="modal">
            <div class="modal-content center grey darken-4 white-text">
                <h4>Formulario de registro</h4>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>
        <div id="modal2" class="modal">
            <div class="modal-content center grey darken-4 white-text">
                <h4>Formulario de inicio de sesión</h4>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>
        
    </div>
</body>
<script src="{{asset('js/materialize.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
</html>