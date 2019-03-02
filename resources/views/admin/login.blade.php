<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<meta charset="UTF-8">
		<title>Larapress login</title>
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Styles -->
		<link rel="stylesheet" href="{{asset('css/app.css')}}" />
	</head>
	<body>
		<div class="container"> 
			<div class="card" style="margin-top:15%;">
				<div class="card-content">
					<span class="card-title center">Larapress.</span>
					<span class="card-title center">Inicio de sesión.</span>
					<div class="container">
						<form method="post" action="{{route('loginValidation')}}">
							@csrf
							<div class="input-field col s6">
								<input id="email" type="email" class="validate" name="email">
								<label for="email">Correo electrónico.</label>
							</div>
							<div class="input-field col s6">
								<input id="password" type="password" class="validate" name="password">
								<label for="password">Contraseña.</label>
							</div>
							<div class="input-field col s2 center">
								<button type="submit" class="btn-large wave-effects">Ingresar</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
		
	</body>
	<script src="{{asset('js/materialize.min.js')}}"></script>
	<script src="{{asset('js/app.js')}}"></script>
</html>