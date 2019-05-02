	<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<meta charset="UTF-8">
		<title>Panel de control</title>
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Styles -->
		<link rel="stylesheet" href="{{asset('css/app.css')}}" />
		<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
	</head>
	<body>
		<ul id='dropdown1' class='dropdown-content'>
			<li><a href="{{route('adminClose')}}">Cerrar sesión</a></li>
		</ul>
		<div class="navbar-fixed">
			<nav class="grey darken-4">
				<div class="nav-wrapper">
					<a href="{{route('adminDashboard')}}" class="brand-logo">Panel</a>
					<ul class="right hide-on-med-and-down">
						<li>
							<a class="dropdown-trigger" href="#!" data-target="dropdown1">{{auth('admin')->user()->name}}
								<i class="material-icons right">arrow_drop_down</i>
							</a>
						</li>
						<li><a ></a></li>
					</ul>
				</div>
			</nav>
		</div>
		<ul class="sidenav sidenav-fixed" id="sidenavelements">
			<li><a href="{{route('adminPages')}}"><i class="material-icons">class</i>Paginas.</a></li>
			<li><a href="{{route('adminPosts')}}"><i class="material-icons">publish</i>Publicaciones.</a></li>
			<li><a href="{{route('adminUsers')}}"><i class="material-icons">face</i>Usuarios.</a></li>
			<li><a href="{{route('adminMedia')}}"><i class="material-icons">burst_mode</i>Media.</a></li>
			<li><a href=""><i class="material-icons">build</i>Configuraciones.</a></li>
		</ul>
		<div class="main">
			<div class="container">
				<div class="row">