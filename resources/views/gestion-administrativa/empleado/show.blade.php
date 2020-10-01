@extends('layouts.menu')

@section('title', 'Empleado '. $empleado->nombre_empleado .' | MRP')

@section('body-class', 'landing-page')

@section('styles')
    <style>
        #container {
            display: inline-flex;
        }
        
    </style>
@endsection

@section('contenido-central')
<div class="tarjeta col-md-6">
    <div class="card ">
        <div class="card-title btn btn-primary">
            Empleado
        </div>
        <div class="card-body">
            <div class="detalle">
                <h4 class="item">Nombre:</h4>
                <p class="item">{{ $empleado->nombre_empleado }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Código:</h4>
                <p class="item">{{ $empleado->cod_empleado }}</p>
            </div>
            <div class="detalle">
                <h5 class="item">Cedula: </h5>
                <p class="item">{{ $empleado->cedula_empleado }}</p>
            </div>
            <div class="detalle">
                <h5 class="item">Correo Electrónico: </h5>
                <p class="item">{{ $empleado->email_empleado }}</p>
            </div>
            <div class="detalle">
                <h5 class="item">Dirección: </h5>
                <p class="item">{{ $empleado->direccion_empleado }}</p>
            </div>
        </div>
        <div class=" text-muted">
            Código: {{ $empleado->cod_empleado }} 
        </div>
    </div>
</div>

<div class="tarjeta col-md-6" >
    <div class="card" style="width: 20rem;padding: 20px;">
        <img class="card-img-top" src="{{$empleado->foto}}" rel="nofollow" alt="image empleado">
        <div class="detalle">
            <h4 class="item">Teléfono:</h4>
            <p class="item">{{ $empleado->telefono_empleado }}</p>
        </div>
        <div class="detalle">
                <h4 class="item">Fecha Nacimiento:</h4>
                <p class="item"  id="fecha_n">{{ $empleado->fecha_nacimiento_empleado }}</p>
        </div>
        <div class="detalle">
            <h4 class="item"  >Edad</h4>
            <p class="item" id="edad"></p>
        </div>

    </div>
</div>
+<script>
    window.onload = calcularEdad(document.getElementById("fecha_n").innerHTML);
    function calcularEdad($fecha) {
        var hoy = new Date();
        var cumpleanos = new Date($fecha);
        var edad = hoy.getFullYear() - cumpleanos.getFullYear();
        var m = hoy.getMonth() - cumpleanos.getMonth();

        if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
            edad--;
        }
        document.getElementById("edad").innerHTML  = edad;
        return edad;
    }
</script>

@endsection