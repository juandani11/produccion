@extends('layouts.menu')

@section('title', $almacen->nombre .' | MRP')

@section('body-class', 'landing-page')

@section('styles')
    <style>

        


    </style>
@endsection

@section('contenido-central')
<div class="tarjeta">
    <div class="card col-md-6">
        <div class="card-title btn btn-primary">
            Almacén
        </div>
        
        <div class="card-body">
            <div class="detalle">
                <h4 class="item">Nombre:</h4>
                <p class="item">{{ $almacen->nombre }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Código:</h4>
                <p class="item">{{ $almacen->codigo }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Descripción: </h4>
                <p class="item">{{ $almacen->descripcion }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Sucursal: </h4>
                <p class="item">{{ $sucursal->nombre_sucursal }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Id Sucursal: </h4>
                <p class="item">{{ $almacen->id_sucursal_almacen }}</p>
            </div>
        </div>
        <div class=" text-muted">
            Estado:
            @if($almacen->estado = 1)
                Activo
            @else
                Inactivo
            @endif
        </div>
    </div>
</div>
@endsection