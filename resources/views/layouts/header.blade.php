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
        {{-- Verifica si ha sido el login exitosamente y muestra un mensaje --}}
        @if(Session::has('message'))
        <div class="row" id="time">
            <h5 class="black-text center">{{ Session::get('message') }}</h5>
        </div>
        @endif
        {{-- Verifica si ha sido el login exitosamente y muestra un mensaje --}}
        @if($errors->has('email'))
        <div class="row" id="time">
            <h5 class="red-text ligthed-3 center">{{ $errors->first('email') }}</h5>
        </div>
        @endif
        
        <div class="navbar-fixed">
            <ul id='dropdown1' class='dropdown-content'>
                <li><a href="{{route('logout')}}">Cerrar sesión</a></li>
            </ul>
            
            <nav class="grey darken-4">
                <div class="nav-wrapper">
                    <a href="{{route('home')}}" class="brand-logo">Larapress</a>
                    <ul class="right hide-on-med-and-down">
                        @if(auth('user')->check()==true)
                        <li>
                            <a class="dropdown-trigger" href="#!" data-target="dropdown1">{{auth('user')->user()->name}}
                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>
                        <li><a></a></li>
                        @else
                        <li>
                            <a class="modal-trigger waves-effect" href="#modal1">Registrate</a>
                        </li>
                        <li>
                            <a class="modal-trigger waves-effect" href="#modal2">Inicia Sesión</a>
                        </li>
                        @endif
                    </ul>
                    <form action="search" method="get">
                        <div class="input-field">
                            <input placeholder="Buscar una publicación..." id="search" type="search" name="search" required>
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
                    @if($page->url_name=='/')
                    <div class="col s2">
                        <a class="white-text" href="{{route('home')}}">
                            {{$page->name}}
                        </a>
                    </div>
                    @else
                    <div class="col s2">
                        <a class="white-text" href="page/{{$page->url_name}}">
                            {{$page->name}}
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @if(auth('user')->check()==true)
                    <div class="col s2">
                        <a class="white-text" href="{{route('homeuser')}}">
                            Mi perfil.
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="container hide-on-large-only">
            <div class="row center">
                <div class="col xl3"></div>
                <div class="col s11">
                    <form action="search" method="get">
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
        <div id="modal1" class="modal">
            <div class="modal-content center">
                <h4>Registro</h4>
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">face</i>
                            <input type="text" name="name" id="name" required>
                            <label for="name">Nombre de usuario</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">drafts</i>
                            <input type="email" name="email" id="email" required>
                            <label for="email">Correo electrónico.</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">dialpad</i>
                            <input type="password" name="password" id="password" required>
                            <label for="password">Contraseña</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            
                            <button type="submit" class=" waves-effect waves-light center btn-large">
                            <i class="material-icons right">send</i>
                            Registrarme.</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div id="modal2" class="modal">
            <div class="modal-content center">
                <h4>Formulario de inicio de sesión</h4>
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">drafts</i>
                            <input type="email" name="email" id="email1" required>
                            <label for="email1">Correo electrónico.</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">dialpad</i>
                            <input type="password" name="password" id="password1" required>
                            <label for="password1">Contraseña</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button type="submit" class=" waves-effect waves-light center btn-large">
                            <i class="material-icons right">send</i>
                            Ingresar.</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>