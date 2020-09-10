@extends('layouts.menu')

@section('title', $materia_prima->nombre .' | MRP')

@section('body-class', 'landing-page')

@section('styles')
    <style>

        


    </style>
@endsection

@section('contenido-central')
<div class="tarjeta">
    <div class="card col-md-6">
        <div class="card-title btn btn-primary">
            Materia Prima
        </div>
        
        <div class="card-body">
            <div class="detalle">
                <h4 class="item">Nombre:</h4>
                <p class="item">{{ $materia_prima->nombre }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Código:</h4>
                <p class="item">{{ $materia_prima->codigo }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Precio: </h4>
                <p class="item">{{ $materia_prima->precio }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Proveedor: </h4>
                <p class="item">{{ $materia_prima->proveedor->nombre }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Id Materia Prima: </h4>
                <p class="item">{{ $materia_prima->id }}</p>
            </div>
        </div>
        <div class=" text-muted">
            Estado:
            @if($materia_prima->estado = 1)
                Activo
            @else
                Inactivo
            @endif
        </div>
    </div>
</div>
@endsection