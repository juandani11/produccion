@extends('layouts.menu')

@section('title', 'Empleado')

@section('body-class', 'landing-page')

@section('styles')
    <style>
        #container {
            display: inline-flex;
        }
        #navbar {
        }
        #aside {
        }


        .card-body {
            display: flex;
            flex-direction: column !important;
        }
        .detalle {
            margin: 4px;
            padding: 5px;
            border: 1px solid #cccc33;
            border-radius: 7pt;
            background: #f9f9f9;
            display: inline-flex;
            align-items: baseline;
            justify-content: space-between;      
        }
        .item {
            padding-right: 20px;
            padding-left:  20px;
            text-align: right;
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
        <img class="card-img-top" src="{{'/img/faces/marc.jpg'}}" rel="nofollow" alt="image empleado">
        <div class="detalle">
            <h4 class="item">Teléfono:</h4>
            <p class="item">{{ $empleado->telefono_empleado }}</p>
        </div>
        <div class="detalle">
                <h4 class="item">Fecha Nacimiento:</h4>
                <p class="item">{{ $empleado->fecha_nacimiento_empleado }}</p>
        </div>
    </div>



</div>


@endsection