@include ('admin.header')
<div class="col s12 center">
	<h3>Páginas.</h3>
</div>
<form action="{{route('savePage')}}" method="post" class="col s12">
	@csrf
	<div class="row">
		<h5 class="center">Agrega una nueva paǵina.</h5>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<i class="material-icons prefix">web</i>
			<input type="text" name="name" id="name" class="validate" required>
			<label for="name">Nombre de la página.</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<i class="material-icons prefix">border_color</i>
			<input type="text" name="url" id="url" class="validate" required>
			<label for="url">Url de la página.</label>
			<span class="helper-text">No debe contener ñ, acentos o signos.</span>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 center">
			<button type="submit" class="btn-large wave-effects">Guardar</button>
		</div>
	</div>
</form>
<div class="col s12">
	<div class="card" id="table">
		<div class="card-content">
			<span class="card-title">Páginas añadidas.</span>
			@if(!empty($pages))
			<table class="centered responsive-table highlight">
				<thead>
					<tr>
						<th>Nombre</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($pages as $page)
					@if($page->url_name=='/')
					<tr>
						<td>{{$page->name}}</td>
						<td><a class="btn-flat" href="{{route('home')}}">Ver página.</a></td>
					</tr>
					@else
					<tr>
						<td>{{$page->name}}</td>
						<td><a class="btn-flat" href="/page/{{$page->url_name}}">Ver página.</a></td>
					</tr>
					@endif
					@endforeach
				</tbody>
			</table>
			@else
			<h5 class="center">No hay registradas.</h5>
			@endif
		</div>
	</div>
</div>
@include ('admin.footer')