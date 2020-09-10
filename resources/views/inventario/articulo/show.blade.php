@extends('layouts.menu')

@section('title', 'Articulo '. $articulo->nombre .' | MRP')

@section('body-class', 'landing-page')

@section('styles')
    <style>


    </style>
@endsection

@section('contenido-central')
<div class="tarjeta">
    <div class="card col-md-6">
        <div class="card-title btn btn-primary">
            Artículo
        </div>
        
        <div class="card-body">
            <div class="detalle">
                <h4 class="item">Nombre:</h4>
                <p class="item">{{ $articulo->nombre }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Código:</h4>
                <p class="item">{{ $articulo->codigo }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Precio: </h4>
                <p class="item">{{ $articulo->precio_venta }}</p>
            </div>

        </div>
        <div class=" text-muted">
            Estado:
            @if($articulo->estado = 1)
                Activo
            @else
                Inactivo
            @endif
        </div>
    </div>
</div>


@endsection