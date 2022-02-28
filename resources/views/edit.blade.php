@extends('main')

@section('content')

@unless(empty( $posts))
@endif
<div class="container">
  <form method="post" action="{{ route('propietarios.update',  $propietarios->id) }}">
    <center><h5>Editar regitro: {{ $propietarios->id }}.- {{ $propietarios->nombre }} {{ $propietarios->apellido_paterno }} {{ $propietarios->apellido_materno }}</h5></center>
					@csrf @method('PATCH')
				<div class="form-row">
      <div class="form-group col-md-6">
        <label for="fecha_refrendo" class="text-dark etiquetas">Fecha de refrendo</label>
        <input type="date" class="form-control bg-white text-center border border-dark" name="fecha_refrendo" value="{{ old('fecha_refrendo', $propietarios->fecha_refrendo )}}">
        @error('fecha_refrendo')
        <div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group col-md-6">
				<label for="nombre" class="text-dark etiquetas">Nombre</label>
        <input type="text" class="form-control bg-white text-center border border-dark" name="nombre" value="{{ old('nombre', $propietarios->nombre )}}">
				@error('nombre')
				<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
        <label for="apellido_paterno" class="text-dark etiquetas">Apellido paterno</label>
        <input type="text" class="form-control bg-white text-center border border-dark" name="apellido_paterno" value="{{ old('apellido_paterno', $propietarios->apellido_paterno )}}">
				@error('apellido_paterno')
				<div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
				@enderror
			</div>
      <div class="form-group col-md-6">
          <center><label for="apellido_materno" class="text-dark etiquetas">Apellido materno</label>
          <input type="text" class="form-control bg-white text-center border border-dark" name="apellido_materno" value="{{ old('apellido_materno', $propietarios->apellido_materno )}}"></center>
            @error('apellido_materno')
          <div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
          @enderror
        </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="calle" class="text-dark etiquetas">Calle</label>
        <input type="text" class="form-control bg-white text-center border border-dark" name="calle" value="{{ old('calle', $propietarios->calle )}}">
        @error('calle')
        <div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group col-md-6">
            <label for="numero" class="text-dark etiquetas">Numero</label>
            <input type="int" class="form-control bg-white text-center border border-dark" name="numero" value="{{ old('numero', $propietarios->numero )}}">
            @error('numero')
            <div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
            @enderror
          </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="colonia" class="text-dark etiquetas">Colonia</label>
      <input type="text" class="form-control bg-white text-center border border-dark" name="colonia" value="{{ old('colonia', $propietarios->colonia )}}">
      @error('colonia')
      <div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group col-md-6">
          <label for="codigo_postal" class="text-dark etiquetas">Codigo_postal</label>
          <input type="int" class="form-control bg-white text-center border border-dark" name="codigo_postal" value="{{ old('codigo_postal', $propietarios->codigo_postal )}}">
          @error('codigo_postal')
          <div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
          @enderror
        </div>
</div>
<div class="form-row">
  <div class="form-group col-md-6">
    <label for="municipio" class="text-dark etiquetas">Municipio</label>
    <input type="text" class="form-control bg-white text-center border border-dark" name="municipio" value="{{ old('municipio', $propietarios->municipio )}}">
    @error('municipio')
    <div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group col-md-6">
        <label for="telefono" class="text-dark etiquetas">telefono</label>
        <input type="int" class="form-control bg-white text-center border border-dark" name="telefono" value="{{ old('telefono', $propietarios->telefono )}}">
        @error('telefono')
        <div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
        @enderror
      </div>
</div>

  <button type="submit" class="btn btn-primary" type="submit">Guardar</button>
  <a  href="{{url('/busquedapropietario')}}"><button class="btn btn-primary"> Volver</a></button>

  </div></from>
  				@endsection
