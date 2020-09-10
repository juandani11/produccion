@extends('layouts.menu')

@section('title', 'Cargo '. $cargo->nombre_cargo .' | MRP')

@section('body-class', 'landing-page')

@section('styles')
    <style>

    </style>
@endsection

@section('contenido-central')
<div class="tarjeta">
    <div class="card col-md-6">
        <div class="card-title btn btn-primary">
            Cargo
        </div>
        <div class="card-body">
            <div class="detalle">
                <h4 class="item">Nombre Cargo:</h4>
                <p class="item">{{ $cargo->nombre_cargo }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Código:</h4>
                <p class="item">{{ $cargo->cod_cargo }}</p>
            </div>
            <div class="detalle">
                <h5 class="item">Descripción: </h5>
                <p class="item">{{ $cargo->descripcion }}</p>
            </div>
        </div>
        <div class=" text-muted">
            Código: {{ $cargo->cod_cargo }} 
        </div>
    </div>
</div>
@endsection