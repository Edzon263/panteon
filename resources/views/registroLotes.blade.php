@extends('main')
@section('content')
@unless(empty( $posts))
@endif
@inject('seccionesService', 'App\Services\SeccionesService')
@inject('areasService', 'App\Services\AreasService')
@inject('concepcionesService', 'App\Services\ConcepcionesService')
@inject('titularesService', 'App\Services\TitularesService')
<div class="container">
	<h4>Registro de Lote</h4>
	<form method="post" action="{{ route('registrolotes') }}">
		@csrf
		<div class="form-row">
			<div class="form-group col-md-4">
				<input type="text" class="form-control bg-white p-3 border border-dark" id="busqueda" placeholder="Busqeda de titular" name="busqueda" value="{{ old('busqueda') }}">
				@error('busqueda')
				<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<button type="button" name="buscar" id="buscar" onclick="buscarTitular()" class="btn btn-primary">Buscar</button>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="titular" class="text-dark etiquetas">Titular</label>
				<select name="titular" class="selectAltura	form-select bg-white p-1 border border-dark" id="titular" name="titular" value="{{ old('titular') }}">
					@foreach ($titularesService->get() as $index => $titularService)
					<option value="{{ $index }}">{{$titularService}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="fecha_refrendo" class="text-dark etiquetas">Fecha de refrendo</label>
				<input type="date" class="form-control bg-white p-3 border border-dark" id="fecha_refrendo" name="fecha_refrendo" value="{{ old('fecha_refrendo') }}">
				@error('fecha_refrendo')
				<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="estatus" class="text-dark etiquetas">Estatus</label>
				<select name="estatus" class="selectAltura	form-select bg-white p-1 border border-dark" id="estatus" name="estatus" value="{{ old('estatus') }}">
					<option value="null">Selecione una opcion</option>
					<option value="disponible">Disponible</option>
					<option value="ocupado">Ocupado</option>
				</select>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="seccion" class="text-dark etiquetas">Seccion</label>
				<select name="seccion" class="selectAltura	form-select bg-white p-1 border border-dark" id="seccion" name="seccion" value="{{ old('seccion') }}">
					@foreach ($seccionesService->get() as $index => $seccionService)
					<option value="{{ $index }}">{{$seccionService}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-3">
				<label for="area" class="text-dark etiquetas">Area</label>
				<select name="area" class="selectAltura	form-select bg-white p-1 border border-dark" id="area" name="area" value="{{ old('area') }}">
					@foreach ($areasService->get() as $index => $areaService)
					<option value="{{ $index }}">{{$areaService}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-3">
				<label for="concepcion" class="text-dark etiquetas">Concepcion</label>
				<select name="concepcion" class="selectAltura	form-select bg-white p-1 border border-dark" id="concepcion" name="concepcion" value="{{ old('concepcion') }}">
					@foreach ($concepcionesService->get() as $index => $concepcionService)
					<option value="{{ $index }}">{{$concepcionService}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-3">
				<label for="numero_concepcion" class="text-dark etiquetas">Numero de concepcion</label>
				<input type="number" class="form-control bg-white p-3 border border-dark" id="numero_concepcion" name="numero_concepcion" value="{{ old('numero_concepcion') }}">
				@error('numero_concepcion')
				<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
		</div>

		<h5>Colindancias</h5>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="colindancia_norte" class="text-dark etiquetas">Norte</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="colindancia_norte" name="colindancia_norte" value="{{ old('colindancia_norte') }}">
				@error('colindancia_norte')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="colindancia_sur" class="text-dark etiquetas">Sur</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="colindancia_sur" name="colindancia_sur" value="{{ old('colindancia_sur') }}">
				@error('colindancia_sur')
				<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="colindancia_oriente" class="text-dark etiquetas">Oriente</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="colindancia_oriente" name="colindancia_oriente" value="{{ old('colindancia_oriente') }}">
				@error('colindancia_oriente')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="colindancia_poniente" class="text-dark etiquetas">Poniente</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="colindancia_poniente" name="colindancia_poniente" value="{{ old('colindancia_poniente') }}">
				@error('colindancia_poniente')
				<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
		</div>

		<h5>Medidas</h5>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="medida_norte" class="text-dark etiquetas">Norte</label>
				<input type="number" step="any" value="0" onchange="suma()" onclick="limpiar(this.id)" class="form-control bg-white p-3 border border-dark" id="medida_norte" name="medida_norte" value="{{ old('medida_norte') }}">
				@error('medida_norte')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="medida_sur" class="text-dark etiquetas">Sur</label>
				<input type="number" step="any" value="0" onchange="suma()" onclick="limpiar(this.id)" class="form-control bg-white p-3 border border-dark" id="medida_sur" name="medida_sur" value="{{ old('medida_sur') }}">
				@error('medida_sur')
				<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="medida_oriente" class="text-dark etiquetas">Oriente</label>
				<input type="number" step="any" value="0" onchange="suma()" onclick="limpiar(this.id)" class="form-control bg-white p-3 border border-dark" id="medida_oriente" name="medida_oriente" value="{{ old('medida_oriente') }}">
				@error('medida_oriente')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="medida_poniente" class="text-dark etiquetas">Poniente</label>
				<input type="number" step="any" value="0" onchange="suma()" onclick="limpiar(this.id)" class="form-control bg-white p-3 border border-dark" id="medida_poniente" name="medida_poniente" value="{{ old('medida_poniente') }}">
				@error('medida_poniente')
				<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="medida_total" class="text-dark etiquetas">Medida total</label>
				<input type="text" value="0" class="form-control bg-white p-3 border border-dark" id="medida_total" name="medida_total" value="{{ old('medida_total') }}">
				@error('total')
				<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="geoubicacion" class="text-dark etiquetas">Geoubicacion</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="geoubicacion" name="geoubicacion" value="{{ old('geoubicacion') }}">
				@error('geoubicacion')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
		</div>
		<button type="submit" class="btn btn-success">Guardar</button>
	</form>
</div>

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
@endsection

<script type="text/javascript">
	window.onload = function() {
		var fecha = new Date(); //Fecha actual
		var mes = fecha.getMonth() + 1; //obteniendo mes
		var dia = fecha.getDate(); //obteniendo dia
		var ano = fecha.getFullYear() + 7; //obteniendo año
		if (dia < 10)
			dia = '0' + dia; //agrega cero si el menor de 10
		if (mes < 10)
			mes = '0' + mes //agrega cero si el menor de 10
		document.getElementById('fecha_refrendo').value = ano + "-" + mes + "-" + dia;
	};

	function buscarTitular() {
		var nombre = $("#busqueda").val();
		if ($.trim(nombre) != '') {
			$.get('getTitular', {
				nombre: nombre
			}, function(id) {
				if (id.length > 0) {
					console.log(id[0]['id']);
					$("#titular").val(id[0]['id']);
				} else {

				}
			});
		}
	}

	function suma() {
		var total = 0;
		var norte = parseFloat(document.getElementById("medida_norte").value);
		var sur = parseFloat(document.getElementById("medida_sur").value);
		var oriente = parseFloat(document.getElementById("medida_oriente").value);
		var poniente = parseFloat(document.getElementById("medida_poniente").value);

		total = norte + sur + oriente + poniente;
		document.getElementById("medida_total").value = total;
	}

	function limpiar(id) {
		document.getElementById(id).value = "";
	}
</script>
