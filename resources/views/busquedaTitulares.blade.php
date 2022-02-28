@extends('main')

@section('content')


@unless(empty( $posts))
@endif

@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css">
<link rel="stylesheet" href="../../extensions/Editor/css/editor.bootstrap5.min.css">
@endsection


<a action="{{ Route::is('registropropietarios')}}" href="{{ Route('registropropietarios')}}" target="_parent"><button class="btn btn-danger btn-sm mb-1">Nuevo</button></a>
<div class="card">
	<div class="card-body">
		<div class="table-responsive">
		<table id="propietarios" class="table table-striped" style="width:100%">
			<thead>
				<tr>
					<th scope="col">id</th>
					<th scope="col">fecha_refrendo</th>
					<th scope="col">nombre</th>
					<th scope="col">apellido_paterno</th>
					<th scope="col">apellido_materno</th>
					<th scope="col">telefono</th>


					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
          @foreach ($propietarios as $prop)
					<tr>
						<td>{{$prop->id}}</td>
						<td>{{$prop->fecha_refrendo}}</td>
						<td>{{$prop->nombre}}</td>
						<td>{{$prop->apellido_paterno}}</td>
						<td>{{$prop->apellido_materno}}</td>
						<td>{{$prop->telefono}}</td>

        		<td>
							<a href="{{route('propietarios.edit', $prop->id )}}" class="btn btn-primary btn-sm mb-1" type="button">
								<i class="fas fa-pencil-alt"></i>Editar
							</a>

															<form action="{{route('propietarios.destroy',['id' => $prop->id] )}}" method="post">
															@csrf @method('DELETE')
															<button type="submit" onclick="return confirm('¿Borrar?');" class="btn btn-danger btn-sm mb-1"><i class="fas fa-trash-alt"></i>Eliminar
															</button>
														</form>



						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
</div>


@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
<script>
	$('#propietarios').dataTable({
		responsive: true,
		autoWidth: false,


	});
</script>



@endsection
