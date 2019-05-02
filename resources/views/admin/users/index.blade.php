@include ('admin.header')
<div class="col s12 center">
	<h3>Usuarios.</h3>
</div>
<div class="col s12">
	<div class="card hoverable" id="table">
		<div class="card-content">
			<span class="card-title">Usuarios registrados.</span>
			@if(!empty($users))
			<table class="centered responsive-table highlight">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Correo</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@else
			<h5 class="center">No hay usuarios registrados.</h5>
			@endif
		</div>
	</div>
</div>
@include ('admin.footer')