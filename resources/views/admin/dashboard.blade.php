@include ('admin.header')

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
	</div>
</div>
<div class="col s12">
	<div class="card">
		<div class="card-content">
			<span class="card-title">Páginas añadidas.</span>
			@if(!empty($pages))
			<table class="highlight centered responsive-table">
				<thead>
					<tr>
						<th>Nombre</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pages as $page)
					<tr>
						<td>{{$page->name}}</td>
					</tr>
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