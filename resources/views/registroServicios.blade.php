@extends('main')
@section('content')
@unless(empty( $posts))
@endif
@inject('titularesService', 'App\Services\TitularesService')
@inject('clasificacionService', 'App\Services\ClasificacionService')
@inject('loteService', 'App\Services\LoteService')
@inject('loteAService', 'App\Services\LoteService')
@inject('funerariaService', 'App\Services\FunerariaService')
@inject('tipoService', 'App\Services\TipoService')
@inject('finadoService', 'App\Services\FinadoService')d
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

	<h4>Servicios</h4>
	<form method="post" action="{{route('servicios.store')}}">
		@csrf

		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="fecha_servicio" class="text-dark etiquetas">Fecha de servicio</label>
				<input type="date" class="form-control bg-white p-3 border border-dark" id="fecha_servicio" name="fecha_servicio" value="{{ old('fecha_servicio') }}">
				@error('fecha_servicio')
				<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="tipo_servicio" class="text-dark etiquetas">Tipo de servicio</label>
				<select name="tipo_servicio" onchange="mostrar(this.value)" class="selectAltura	form-select bg-white p-1 border border-dark" id="tipo_servicio" name="tipo_servicio">
					@foreach ($tipoService->get() as $index => $tipoService)
					<option value="{{ $index }}">{{$tipoService}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div id="finado">
			<h5 id="titulo">titulo aqui</h5>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="nombre" class="text-dark etiquetas">Nombre</label>
					<input type="text" class="form-control bg-white p-3 border border-dark" id="nombre" name="nombre" value="{{ old('nombre') }}">
					@error('nombre')
					<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group col-md-4">
					<label for="apellido_paterno" class="text-dark etiquetas">Apellido paterno</label>
					<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_paterno" name="apellido_paterno" value="{{ old('apellido_paterno') }}">
					@error('apellido_paterno')
					<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group col-md-4">
					<label for="apellido_materno" class="text-dark etiquetas">Apellido materno</label>
					<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_materno" name="apellido_materno" value="{{ old('apellido_materno') }}">
					@error('apellido_materno')
					<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
					@enderror
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="sexo" class="text-dark etiquetas">Genero</label>
					<select name="sexo" class="selectAltura	form-select bg-white p-1 border border-dark" id="sexo" name="sexo" value="{{ old('sexo') }}">
						<option value="default">Seleccione un genero</option>
						<option value="Femenino">Femenino</option>
						<option value="Masculino">Masculino</option>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="causa_muerte" class="text-dark etiquetas">Causa de muerte</label>
					<input type="text" class="form-control bg-white p-3 border border-dark" id="causa_muerte" name="causa_muerte" value="{{ old('causa_muerte') }}">
					@error('causa_muerte')
					<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group col-md-4">
					<label for="fecha_nacimiento" class="text-dark etiquetas">Fecha de nacimiento</label>
					<input type="date" class="form-control bg-white p-3 border border-dark" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
					@error('fecha_nacimiento')
					<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
					@enderror
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<input type="text" class="form-control bg-white p-3 border border-dark" id="busqueda" name="busqueda" placeholder="Busqueda de titular" value="{{ old('busqueda') }}">
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
					<label for="clasificacion" class="text-dark etiquetas">Clasificacion</label>
					<select name="clasificacion" class="selectAltura	form-select bg-white p-1 border border-dark" id="clasificacion" name="clasificacion" value="{{ old('clasificacion') }}">
						@foreach ($clasificacionService->get() as $index => $clasificacionService)
						<option value="{{ $index }}">{{$clasificacionService}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="lote" class="text-dark etiquetas">Lote asignado</label>
					<select name="lote" class="selectAltura	form-select bg-white p-1 border border-dark" id="lote" name="lote" value="{{ old('lote') }}">
					</select>
				</div>
			</div>
		</div>

		<div id="exhumacion">
			<h5>Exhumacion</h5>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="finado_select" class="text-dark etiquetas">Finado</label>
					<select name="finado_select" class="selectAltura	form-select bg-white p-1 border border-dark" id="finado_select" name="finado_select" value="{{ old('finado_select') }}">
						@foreach ($finadoService->get() as $index => $finadoService)
						<option value="{{ $index }}">{{$finadoService}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="lote_actual" class="text-dark etiquetas">Ubicacion de restos</label>
					<select name="lote_actual" class="selectAltura	form-select bg-white p-1 border border-dark" id="lote_actual" name="lote_actual" value="{{ old('lote_actual') }}">
						@foreach ($loteAService->get() as $index => $loteService)
						<option value="{{ $index }}">{{$loteService}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="lote_reihumacion" class="text-dark etiquetas">Ubicacion reihumacion</label>
					<select name="lote_reihumacion" class="selectAltura	form-select bg-white p-1 border border-dark" id="lote_reihumacion" name="lote_reihumacion" value="{{ old('lote_reihumacion') }}">
					</select>
				</div>
			</div>
		</div>

		<h5>Persona que solicita el servicio</h5>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="solicitante_nombre" class="text-dark etiquetas">Nombre</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="solicitante_nombre" name="solicitante_nombre" value="{{ old('solicitante_nombre') }}">
				@error('solicitante_nombre')
				<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="solicitante_apellido_paterno" class="text-dark etiquetas">Apellido paterno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="solicitante_apellido_paterno" name="solicitante_apellido_paterno" value="{{ old('solicitante_apellido_paterno') }}">
				@error('solicitante_apellido_paterno')
				<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="solicitante_apellido_materno" class="text-dark etiquetas">Apellido materno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="solicitante_apellido_materno" name="solicitante_apellido_materno" value="{{ old('solicitante_apellido_materno') }}">
				@error('solicitante_apellido_materno')
				<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="telefono" class="text-dark etiquetas">Telefono</label>
				<input type="number" class="form-control bg-white p-3 border border-dark" id="telefono" name="telefono" value="{{ old('telefono') }}">
				@error('telefono')
				<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="funeraria" class="text-dark etiquetas">Funeraria que atendo el servicio</label>
				<select name="funeraria" class="selectAltura	form-select bg-white p-1 border border-dark" id="funeraria" name="funeraria" value="{{ old('funeraria') }}">
					@foreach ($funerariaService->get() as $index => $funerariaService)
					<option value="{{ $index }}">{{$funerariaService}}</option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="libro" class="text-dark etiquetas">Libro</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="libro" name="libro" value="{{ old('libro') }}">
				@error('libro')
				<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="hoja" class="text-dark etiquetas">Hoja</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="hoja" name="hoja" value="{{ old('hoja') }}">
				@error('hoja')
				<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="memorandum" class="text-dark etiquetas">Memorandum</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="memorandum" name="memorandum" value="{{ old('memorandum') }}">
				@error('memorandum')
				<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="observaciones" class="text-dark etiquetas">Observaciones</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="observaciones" name="observaciones" value="{{ old('observaciones') }}">
				@error('observaciones')
				<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
		</div>

		<div class="form-row">
			<button type="submit" class="btn btn-primary">Enviar</button>
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

<script type="text/javascript">
	window.onload = function() {
		var fecha = new Date(); //Fecha actual
		var mes = fecha.getMonth() + 1; //obteniendo mes
		var dia = fecha.getDate(); //obteniendo dia
		var ano = fecha.getFullYear(); //obteniendo año
		if (dia < 10)
			dia = '0' + dia; //agrega cero si el menor de 10
		if (mes < 10)
			mes = '0' + mes //agrega cero si el menor de 10
		document.getElementById('fecha_servicio').value = ano + "-" + mes + "-" + dia;

		$("#finado").hide();
		$("#exhumacion").hide();
	};

	function getLotesTitular(titular_id, id) {
		if ($.trim(titular_id) != '') {
			$.get('getlotes', {
				titular_id: titular_id
			}, function(lotes) {
				$(id).empty();
				$(id).append("<option value''>Seleccione un lote</option>");
				Object.entries(lotes).forEach(([key, value]) => {
					$(id).append("<option value'" + key + "'>" + value + "</option>");
				});
			});
		}
	}

	$(document).ready(function() {
		$('#titular').on('change', function() {
			var titular_id = $(this).val();
			getLotesTitular(titular_id, '#lote');
		});

		$('#finado_select').on('change', function() {
			var finado_id = $(this).val();
			if ($.trim(finado_id) != '' && finado_id > 0) {
				$.get('getLoteFinado', {
					finado_id: finado_id
				}, function(lote) {
					console.log("Lote: " + lote[0]['fk_lotes_id']);
					console.log("Titular: " + lote[0]['fk_titular_id']);
					getLotesTitular(lote[0]['fk_titular_id'], '#lote_reihumacion');
					$("#lote_reihumacion option[value='" + lote[0]['fk_lotes_id'] + "']").remove();
					$('#lote_actual').empty();
					$('#lote_actual').append("<option value'" + lote[0]['fk_lotes_id'] + "'>" + lote[0]['fk_lotes_id'] + "</option>");
				});
			} else {
				$('#lote_actual').empty();
			}
		});
	});

	function buscarTitular() {
		var nombre = $("#busqueda").val();
		if ($.trim(nombre) != '') {
			$.get('getTitular', {
				nombre: nombre
			}, function(id) {
				if (id.length > 0) {
					var idTitular = id[0]['id'];
					$("#titular").val(idTitular);
					getLotesTitular(idTitular);
				} else {

				}
			});
		}
		$("#busqueda").val("");
	}

	function getLotesTitular(titular_id, id) {
		if ($.trim(titular_id) != '') {
			$.get('getlotes', {
				titular_id: titular_id
			}, function(lotes) {
				$(id).empty();
				$(id).append("<option value''>Seleccione un lote</option>");
				Object.entries(lotes).forEach(([key, value]) => {
					$(id).append("<option value'" + key + "'>" + value + "</option>");
				});
			});
		}
	}

	function mostrar(id) {
		if (id == 0) {
			$("#finado").hide();
			$("#exhumacion").hide();
		}

		if (id == 1) {
			document.getElementById('titulo').innerHTML = "Inhumacion";
			$("#finado").show();
			document.getElementById('finado_select').getElementsByTagName('option')[0].selected = 'selected';
			$('#lote_actual').empty();
			$("#exhumacion").hide();
		}

		if (id == 2) {
			$("#finado").hide();
			document.getElementById('nombre').value = "";
			document.getElementById('apellido_paterno').value = "";
			document.getElementById('apellido_materno').value = "";
			document.getElementById('sexo').getElementsByTagName('option')[0].selected = 'selected';
			document.getElementById('causa_muerte').value = "";
			document.getElementById('fecha_nacimiento').value = "";
			document.getElementById('clasificacion').getElementsByTagName('option')[0].selected = 'selected';
			document.getElementById('titular').getElementsByTagName('option')[0].selected = 'selected';

			$("#exhumacion").show();
		}

		if (id == 3) {
			document.getElementById('titulo').innerHTML = "Deposito de cenizas";
			$("#finado").show();
			$("#exhumacion").hide();
		}
	}
</script>
@endsection
