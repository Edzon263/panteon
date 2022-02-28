@extends('main')

@section('content')

@unless(empty( $posts))
@endif
<div class="container align-items-center">
	<div class="row align-items-center mb-4">
		<div class="col-4">
			<img class="img-fluid" src="FONDO2.jpg" alt="">
		</div>
		<div class="col-4">
			<img class="img-fluid" src="FONDO3.jpeg" alt="">
		</div>
		<div class="col-4">
			<img class="img-fluid" src="FONDO4.jpeg" alt="">
		</div>
  </div>
	<div class="row align-items-center">
		<div class="col align-items-center text-center">
			<h4>Dirección: Calz. Hidalgo 1000, Zapotlán de Allende, 43680 Tulancingo de Bravo, Hgo.</h4>
		</div>
	</div>
	<div class="row align-items-center">
		<div class="col align-items-center text-center">
			<h5>Horario:</h5>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-3 align-items-center text-center">
				<h5>Día</h5>
			</div>
			<div class="col-3 align-items-center text-center">
				<h5>Hora</h5>
			</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-3 align-items-center text-center">
				<p class="p">Lunes</p>
			</div>
			<div class="col-3 align-items-center text-center">
				<p class="p">09:00 - 13:00</p>
			</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-3 align-items-center text-center">
				<p class="p">Martes</p>
			</div>
			<div class="col-3 align-items-center text-center">
				<p class="p">09:00 - 13:00</p>
			</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-3 align-items-center text-center">
				<p class="p">Miércoles</p>
			</div>
			<div class="col-3 align-items-center text-center">
				<p class="p">09:00 - 13:00</p>
			</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-3 align-items-center text-center">
				<p class="p">Jueves</p>
			</div>
			<div class="col-3 align-items-center text-center">
				<p class="p">09:00 - 13:00</p>
			</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-3 align-items-center text-center">
				<p class="p">Viernes</p>
			</div>
			<div class="col-3 align-items-center text-center">
				<p class="p">09:00 - 13:00</p>
			</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-3 align-items-center text-center">
				<p class="p">Sábado</p>
			</div>
			<div class="col-3 align-items-center text-center">
				<p class="p">09:00 - 13:00</p>
			</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-3 align-items-center text-center">
				<p class="p">Domingo</p>
			</div>
			<div class="col-3 align-items-center text-center">
				<p class="p">09:00 - 13:00</p>
			</div>
	</div>
</div>
@endsection
