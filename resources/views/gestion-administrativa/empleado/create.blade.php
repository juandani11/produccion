@extends('layouts.menu')

@section('title', 'Crear | MRP')

@section('body-class', 'landing-page')

@section('styles')
    <style>

        .tarjeta {
            justify-content: center !important;
        }

    </style>
@endsection

@section('contenido-central')
<div class="main ">
    <div class="container">

        <div class="tarjeta">
            <div class="card card-crud card-nav-tabs text-center">
                {!! Form::open(['route' => ['empleados.store']]) !!}

                @include('gestion-administrativa.empleado.partials.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
        
</div>
@endsection