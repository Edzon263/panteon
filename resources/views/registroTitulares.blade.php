@extends('main')
@section('content')

@unless(empty( $posts))
@endif

<div class="container">
	@if(\Session::has('guardado'))

	<script type="text/javascript">
		Swal.fire({
			position: 'top-end',
			icon: 'success',
			title: "{!! \Session::get('guardado')!!}",
			showConfirmButton: false,
			timer: 1500
		})
	</script>

	@endif
	<h4>Registro de Titulares</h4>
	<form method="post" action="{{route('registrotitulares')}}">
		@csrf
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="nombre" class="text-dark etiquetas">Nombre</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="nombre" name="nombre" value="{{ old('nombre') }}">
				@error('nombre')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="apellido_paterno" class="text-dark etiquetas">Apellido paterno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_paterno" name="apellido_paterno" value="{{ old('apellido_paterno') }}">
				@error('apellido_paterno')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="apellido_materno" class="text-dark etiquetas">Apellido materno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_materno" name="apellido_materno" value="{{ old('apellido_materno') }}">
				@error('apellido_materno')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="calle" class="text-dark etiquetas">Calle</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="calle" name="calle" value="{{ old('calle') }}">
				@error('calle')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="colonia" class="text-dark etiquetas">Colonia</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="colonia" name="colonia" value="{{ old('colonia') }}">
				@error('colonia')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="municipio" class="text-dark etiquetas">Municipio</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="municipio" name="municipio" value="{{ old('municipio') }}">
				@error('municipio')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="numero" class="text-dark etiquetas">Numero</label>
				<input type="number" class="form-control bg-white p-3 border border-dark" id="numero" name="numero" value="{{ old('numero') }}">
				@error('numero')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="codigo_postal" class="text-dark etiquetas">Codigo Postal</label>
				<input type="number" class="form-control bg-white p-3 border border-dark" id="codigo_postal" name="codigo_postal" value="{{ old('codigo_postal') }}">
				@error('codigo_postal')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="telefono" class="text-dark etiquetas">Telefono</label>
				<input type="number" class="form-control bg-white p-3 border border-dark" id="telefono" name="telefono" value="{{ old('telefono') }}">
				@error('telefono')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
		</div>

		<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
</div>



@endsection
