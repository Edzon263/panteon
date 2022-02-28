@extends('main')
@section('content')

@unless(empty( $posts))
@endif
@inject('titularesService', 'App\Services\TitularesService')

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
    <h4>Pago de refrendo</h4>
    <form method="post" action="{{route('pagos')}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <input type="text" class="form-control bg-white p-3 border border-dark" id="busqueda" name="busqueda" value="{{ old('busqueda') }}">
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
                <label for="fecha_pago" class="text-dark etiquetas">Fecha de pago</label>
                <input type="date" class="form-control bg-white p-3 border border-dark" id="fecha_pago" name="fecha_pago" value="{{ old('fecha_pago') }}">
                @error('fecha_pago')
                <div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="titular" class="text-dark etiquetas">Titular</label>
                <select name="titular" class="selectAltura	form-select bg-white p-1 border border-dark" id="titular" name="titular" value="{{ old('titular') }}">
                    @foreach ($titularesService->get() as $index => $titularService)
                    <option value="{{ $index }}">{{$titularService}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="lote" class="text-dark etiquetas">Lote</label>
                <select name="lote" class="selectAltura	form-select bg-white p-1 border border-dark" id="lote" name="lote" value="{{ old('lote') }}">
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="cantidad" class="text-dark etiquetas">Cantidad</label>
                <input type="number" class="form-control bg-white p-3 border border-dark" id="cantidad" name="cantidad" value="{{ old('cantidad') }}">
                @error('cantidad')
                <div class="alert  alert-danger text-white" role="alert">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
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
        document.getElementById('fecha_pago').value = ano + "-" + mes + "-" + dia;

    };

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

    $(document).ready(function() {
        $('#titular').on('change', function() {
            var titular_id = $(this).val();
            console.log(titular_id);
            getLotesTitular(titular_id);
        });
    });

    function getLotesTitular(titular_id) {
        if ($.trim(titular_id) != '') {
            $.get('getlotes', {
                titular_id: titular_id
            }, function(lotes) {
                $("#lote").empty();
                $("#lote").append("<option value''>Seleccione un lote</option>");
                Object.entries(lotes).forEach(([key, value]) => {
                    $("#lote").append("<option value'" + key + "'>" + value + "</option>");
                });
            });
        }
    }
</script>
@endsection
