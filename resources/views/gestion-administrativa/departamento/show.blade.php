@extends('layouts.menu')

@section('title', 'Departamento '. $departamento->nombre_departamento .' | MRP')

@section('body-class', 'landing-page')

@section('styles')
    <style>


    </style>
@endsection

@section('contenido-central')
<div class="tarjeta">
    <div class="card col-md-6">
        <div class="card-title btn btn-primary">
            Departamento
        </div>
        <div class="card-body">
            <div class="detalle">
                <h4 class="item">Nombre:</h4>
                <p class="item">{{ $departamento->nombre_departamento }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Código:</h4>
                <p class="item">{{ $departamento->cod_departamento }}</p>
            </div>
        </div>
        <div class=" text-muted">
            Código: {{ $departamento->id_departamento }} 
        </div>
    </div>
</div>
@endsection