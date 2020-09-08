@extends('layouts.menu')

@section('title', 'Proveedor '. $proveedor->nombre)

@section('body-class', 'landing-page')

@section('styles')
    <style>

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
<div class="tarjeta">
    <div class="card col-md-6">
        <div class="card-title btn btn-primary">
            Proveedor
        </div>
        
        <div class="card-body">
            <div class="" style="text-align:center;">
                <img class="card-img-top" style="width:50%; padding-bottom:5px;"
                src="{{ $proveedor->src }}" rel="nofollow" alt="image proveedor">
            </div>
            <div class="detalle">
                <h4 class="item">Nombre:</h4>
                <p class="item">{{ $proveedor->nombre }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Código:</h4>
                <p class="item">{{ $proveedor->codigo }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Teléfono: </h4>
                <p class="item">{{ $proveedor->telefono }}</p>
            </div>
        </div>
        <div class=" text-muted">
            Estado:
            @if($proveedor->estado = 1)
                Activo
            @else
                Inactivo
            @endif
        </div>
    </div>
</div>
@endsection