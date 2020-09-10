@extends('layouts.menu')

@section('title', $area->nombre_area .' | MRP')

@section('body-class', 'landing-page')

@section('styles')
    <style>

    </style>
@endsection

@section('contenido-central')
<div class="tarjeta">
    <div class="card col-md-6">
        <div class="card-title btn btn-primary">
            Area
        </div>
        <div class="card-body">
            <div class="detalle">
                <h4 class="item">Nombre:</h4>
                <p class="item">{{ $area->nombre_area }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Código:</h4>
                <p class="item">{{ $area->cod_area }}</p>
            </div>
            <div class="detalle">
                <h5 class="item">Dpto. pertenece: </h5>
                <p class="item">{{ $area->id_departamento_area }}</p>
            </div>
        </div>
        <div class=" text-muted">
            Código: {{ $area->id_departamento }} 
        </div>
    </div>
</div>
@endsection