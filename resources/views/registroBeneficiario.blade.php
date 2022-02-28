@extends('main')
@section('content')

@unless(empty( $posts))
@endif
@inject('loteService1', 'App\Services\LoteService')
@inject('loteService2', 'App\Services\LoteService')
@inject('loteService3', 'App\Services\LoteService')
@inject('loteService4', 'App\Services\LoteService')
@inject('loteService5', 'App\Services\LoteService')
@inject('loteService6', 'App\Services\LoteService')
@inject('loteService7', 'App\Services\LoteService')
@inject('loteService8', 'App\Services\LoteService')
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
	<h4>Registro de Beneficiarios</h4>
	<form method="post" action="{{route('registrobeneficiarios')}}" id="formulario">
		@csrf
		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="nombre1" class="text-dark etiquetas">Nombre</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="nombre1" name="nombre1" value="{{ old('nombre1') }}">
				@error('nombre1')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="apellido_paterno1" class="text-dark etiquetas">Apellido paterno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_paterno1" name="apellido_paterno1" value="{{ old('apellido_paterno1') }}">
				@error('apellido_paterno1')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="apellido_materno1" class="text-dark etiquetas">Apellido materno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_materno1" name="apellido_materno1" value="{{ old('apellido_materno1') }}">
				@error('apellido_materno1')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="lote1" class="text-dark etiquetas">Lote asignado</label>
				<select name="lote1" class="selectAltura	form-select bg-white p-1 border border-dark" id="lote1" name="lote1" value="{{ old('lote1') }}">
					@foreach ($loteService1->get() as $index => $loteService)
					<option value="{{ $index }}">{{$loteService}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-3">
				<button type="button" name="button" id="agregar1" class="btn btn-success" onclick="nuevoBen(1)">+</button>
			</div>
		</div>

		<div class="form-row" id="ben2">
			<div class="form-group col-md-3">
				<label for="nombre2" class="text-dark etiquetas">Nombre</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="nombre2" name="nombre2" value="{{ old('nombre2') }}">
				@error('nombre2')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="apellido_paterno2" class="text-dark etiquetas">Apellido paterno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_paterno2" name="apellido_paterno2" value="{{ old('apellido_paterno2') }}">
				@error('apellido_paterno2')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="apellido_materno2" class="text-dark etiquetas">Apellido materno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_materno2" name="apellido_materno2" value="{{ old('apellido_materno2') }}">
				@error('apellido_materno2')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="lote2" class="text-dark etiquetas">Lote asignado</label>
				<select name="lote2" class="selectAltura	form-select bg-white p-1 border border-dark" id="lote2" name="lote2" value="{{ old('lote2') }}">
					@foreach ($loteService2->get() as $index => $loteService)
					<option value="{{ $index }}">{{$loteService}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-3">
				<button type="button" name="button" id="agregar2" class="btn btn-success" onclick="nuevoBen(2)">+</button>
				<button type="button" name="button" id="borrar2" class="btn btn-danger" onclick="borrarBen(2)">-</button>
			</div>
		</div>
		<div class="form-row" id="ben3">
			<div class="form-group col-md-3">
				<label for="nombre3" class="text-dark etiquetas">Nombre</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="nombre3" name="nombre3" value="{{ old('nombre3') }}">
				@error('nombre3')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="apellido_paterno3" class="text-dark etiquetas">Apellido paterno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_paterno3" name="apellido_paterno3" value="{{ old('apellido_paterno3') }}">
				@error('apellido_paterno3')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="apellido_materno3" class="text-dark etiquetas">Apellido materno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_materno3" name="apellido_materno3" value="{{ old('apellido_materno3') }}">
				@error('apellido_materno3')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="lote3" class="text-dark etiquetas">Lote asignado</label>
				<select name="lote3" class="selectAltura	form-select bg-white p-1 border border-dark" id="lote3" name="lote3" value="{{ old('lote3') }}">
					@foreach ($loteService3->get() as $index => $loteService)
					<option value="{{ $index }}">{{$loteService}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-3">
				<button type="button" name="button" id="agregar3" class="btn btn-success" onclick="nuevoBen(3)">+</button>
				<button type="button" name="button" id="borrar3" class="btn btn-danger" onclick="borrarBen(3)">-</button>
			</div>
		</div>

		<div class="form-row" id="ben4">
			<div class="form-group col-md-3">
				<label for="nombre4" class="text-dark etiquetas">Nombre</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="nombre4" name="nombre4" value="{{ old('nombre4') }}">
				@error('nombre4')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="apellido_paterno4" class="text-dark etiquetas">Apellido paterno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_paterno4" name="apellido_paterno4" value="{{ old('apellido_paterno4') }}">
				@error('apellido_paterno4')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="apellido_materno4" class="text-dark etiquetas">Apellido materno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_materno4" name="apellido_materno4" value="{{ old('apellido_materno4') }}">
				@error('apellido_materno4')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="lote4" class="text-dark etiquetas">Lote asignado</label>
				<select name="lote4" class="selectAltura	form-select bg-white p-1 border border-dark" id="lote4" name="lote4" value="{{ old('lote4') }}">
					@foreach ($loteService4->get() as $index => $loteService)
					<option value="{{ $index }}">{{$loteService}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-3">
				<button type="button" name="button" id="agregar4" class="btn btn-success" onclick="nuevoBen(4)">+</button>
				<button type="button" name="button" id="borrar4" class="btn btn-danger" onclick="borrarBen(4)">-</button>
			</div>
		</div>
		<div class="form-row" id="ben5">
			<div class="form-group col-md-3">
				<label for="nombre5" class="text-dark etiquetas">Nombre</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="nombre5" name="nombre5" value="{{ old('nombre5') }}">
				@error('nombre5')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="apellido_paterno5" class="text-dark etiquetas">Apellido paterno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_paterno5" name="apellido_paterno5" value="{{ old('apellido_paterno5') }}">
				@error('apellido_paterno5')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="apellido_materno5" class="text-dark etiquetas">Apellido materno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_materno5" name="apellido_materno5" value="{{ old('apellido_materno5') }}">
				@error('apellido_materno5')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="lote5" class="text-dark etiquetas">Lote asignado</label>
				<select name="lote5" class="selectAltura	form-select bg-white p-1 border border-dark" id="lote5" name="lote5" value="{{ old('lote5') }}">
					@foreach ($loteService5->get() as $index => $loteService)
					<option value="{{ $index }}">{{$loteService}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-3">
				<button type="button" name="button" id="agregar5" class="btn btn-success" onclick="nuevoBen(5)">+</button>
				<button type="button" name="button" id="borrar5" class="btn btn-danger" onclick="borrarBen(5)">-</button>
			</div>
		</div>
		<div class="form-row" id="ben6">
			<div class="form-group col-md-3">
				<label for="nombre6" class="text-dark etiquetas">Nombre</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="nombre6" name="nombre6" value="{{ old('nombre6') }}">
				@error('nombre6')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="apellido_paterno6" class="text-dark etiquetas">Apellido paterno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_paterno6" name="apellido_paterno6" value="{{ old('apellido_paterno6') }}">
				@error('apellido_paterno6')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="apellido_materno6" class="text-dark etiquetas">Apellido materno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_materno6" name="apellido_materno6" value="{{ old('apellido_materno6') }}">
				@error('apellido_materno6')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="lote6" class="text-dark etiquetas">Lote asignado</label>
				<select name="lote6" class="selectAltura	form-select bg-white p-1 border border-dark" id="lote6" name="lote6" value="{{ old('lote6') }}">
					@foreach ($loteService6->get() as $index => $loteService)
					<option value="{{ $index }}">{{$loteService}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-3">
				<button type="button" name="button" id="agregar6" class="btn btn-success" onclick="nuevoBen(6)">+</button>
				<button type="button" name="button" id="borrar6" class="btn btn-danger" onclick="borrarBen(6)">-</button>
			</div>
		</div>
		<div class="form-row" id="ben7">
			<div class="form-group col-md-3">
				<label for="nombre7" class="text-dark etiquetas">Nombre</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="nombre7" name="nombre7" value="{{ old('nombre7') }}">
				@error('nombre7')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="apellido_paterno7" class="text-dark etiquetas">Apellido paterno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_paterno7" name="apellido_paterno7" value="{{ old('apellido_paterno7') }}">
				@error('apellido_paterno7')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="apellido_materno7" class="text-dark etiquetas">Apellido materno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_materno7" name="apellido_materno7" value="{{ old('apellido_materno7') }}">
				@error('apellido_materno7')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="lote7" class="text-dark etiquetas">Lote asignado</label>
				<select name="lote7" class="selectAltura	form-select bg-white p-1 border border-dark" id="lote7" name="lote7" value="{{ old('lote7') }}">
					@foreach ($loteService7->get() as $index => $loteService)
					<option value="{{ $index }}">{{$loteService}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-3">
				<button type="button" name="button" id="agregar7" class="btn btn-success" onclick="nuevoBen(7)">+</button>
				<button type="button" name="button" id="borrar7" class="btn btn-danger" onclick="borrarBen(7)">-</button>
			</div>
		</div>

		<div class="form-row" id="ben8">
			<div class="form-group col-md-3">
				<label for="nombre8" class="text-dark etiquetas">Nombre</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="nombre8" name="nombre8" value="{{ old('nombre8') }}">
				@error('nombre8')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="apellido_paterno8" class="text-dark etiquetas">Apellido paterno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_paterno8" name="apellido_paterno8" value="{{ old('apellido_paterno8') }}">
				@error('apellido_paterno8')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="apellido_materno8" class="text-dark etiquetas">Apellido materno</label>
				<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_materno8" name="apellido_materno8" value="{{ old('apellido_materno8') }}">
				@error('apellido_materno8')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="lote8" class="text-dark etiquetas">Lote asignado</label>
				<select name="lote8" class="selectAltura	form-select bg-white p-1 border border-dark" id="lote8" name="lote8" value="{{ old('lote8') }}">
					@foreach ($loteService8->get() as $index => $loteService)
					<option value="{{ $index }}">{{$loteService}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-3">
				<button type="button" name="button" id="borrar8" class="btn btn-danger" onclick="borrarBen(8)">-</button>
			</div>
		</div>
		<div class="form-row">
			<button type="submit" class="btn btn-primary">Enviar</button>
		</div>
	</form>
</div>
<script type="text/javascript">
	window.onload = function() {
		for (var i = 0; i < 8; i++) {
			$("#ben" + (i + 1)).hide();
		}
	}

	function nuevoBen(n) {
		var idIn = "#ben" + (n + 1);
		var idBtnA = "#agregar" + n;
		var idBtnB = "#borrar" + n;
		$(idIn).show();
		$(idBtnA).hide();
		$(idBtnB).hide();
	}

	function borrarBen(n) {
		var idIn = "#ben" + n;
		var idBtnA = "#agregar" + (n - 1);
		var idBtnB = "#borrar" + (n - 1);
		$(idIn).hide();
		$(idBtnA).show();
		$(idBtnB).show();
	}
</script>
@endsection
