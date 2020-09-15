@extends('layouts.menu')

@section('title', $inventario->nombre .' | MRP')

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
                <h4 class="item">Cantidad:</h4>
                <p class="item">{{ $inventario->cantidad }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Reserva:</h4>
                <p class="item">{{ $inventario->reserva }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Unidad de medida: </h4>
                <p class="item">{{ $inventario->unidad_medida }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Disponibilidad: </h4>
                <p class="item">{{ $inventario->disponibilidad }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Almacén: </h4>
                <p class="item">{{ $almacen->nombre }}</p>
            </div>
        </div>
        <div class=" text-muted">
            Estado:
            @if($inventario->estado = 1)
                Activo
            @else
                Inactivo
            @endif
        </div>
    </div>
</div>
@endsection