@extends('layouts.menu')

@section('title', 'Sucursal '. $sucursal->nombre_sucursal .' | MRP')

@section('body-class', 'landing-page')

@section('styles')
    <style>


    </style>
@endsection

@section('contenido-central')
<div class="tarjeta">
    <div class="card col-md-6">
        <div class="card-title btn btn-primary">
            Sucursal
        </div>
        <div class="card-body">
            <div class="detalle">
                <h4 class="item">Nombre:</h4>
                <p class="item">{{ $sucursal->nombre_sucursal }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Código:</h4>
                <p class="item">{{ $sucursal->cod_sucursal }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Descripción: </h4>
                <p class="item">{{ $sucursal->descripcion }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Dirección: </h4>
                <p class="item">{{ $sucursal->direccion }}</p>
            </div>
        </div>
        <div class=" text-muted">
            Código: {{ $sucursal->codigo }} 
        </div>
    </div>
</div>
@endsection