@extends('layouts.menu')

@section('title', 'Sucursal')

@section('body-class', 'landing-page')

@section('styles')
    <style>



    </style>
@endsection

@section('contenido-central')
<div class="tarjeta">
    <div class="card card-nav-tabs text-center">
        <div class="card-header card-header-primary text-capitalize">
            Sucursal {{ $sucursal->nombre_sucursal }}
        </div>
        <div class="card-body">
            <h4 class="card-title">{{ $sucursal->descripcion }}</h4>
            <p class="card-text">{{ $sucursal->direccion }}</p>
        </div>
        <div class=" text-muted">
            Codigo {{ $sucursal->codigo }} 
        </div>
    </div>
</div>
@endsection