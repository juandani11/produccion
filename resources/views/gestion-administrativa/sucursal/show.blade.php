@extends('layouts.menu')

@section('title', 'Sucursal')

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