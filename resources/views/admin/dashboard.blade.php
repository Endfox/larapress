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
	</head>
	<body>
		<ul id='dropdown1' class='dropdown-content'>
			<li><a href="{{route('adminClose')}}">Cerrar sesión</a></li>
		</ul>
		<div class="navbar-fixed">
			<nav class="grey darken-4 ">
				<div class="nav-wrapper">
					<a href="{{route('home')}}" class="brand-logo">Panel</a>
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
			<li><a href=""><i class="material-icons">publish</i>Publicaciones.</a></li>
			<li><a href=""><i class="material-icons">face</i>Usuarios.</a></li>
			<li><a href=""><i class="material-icons">build</i>Configuraciones.</a></li>
		</ul>
		<div class="main">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<div class="card">
							<div class="card-content">
								<span class="card-title">Publicaciones realizadas recientemente.</span>
								@if(!empty($posts))
								<table class="highlight centered responsive-table">
									<thead>
										<tr>
											<th>Título</th>
											<th>Url</th>
										</tr>
									</thead>
									<tbody>
										@foreach($posts as $post)
										<tr>
											<td>{{$post->title}}</td>
											<td>{{$post->slug_url}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								@else
								<h5 class="center">No hay publicaciones realizados.</h5>
								@endif
							</div>
							<div class="card-content">
							</div>
						</div>
					</div>
					<div class="col s12">
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
	</body>
	<script src="{{asset('js/materialize.min.js')}}"></script>
	<script src="{{asset('js/app.js')}}"></script>
</html>