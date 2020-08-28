@extends('layouts.menu')

@section('title', 'Crear Nuevo Empleado')

@section('body-class', 'landing-page')

@section('styles')
    <style>

        .tarjeta {
            display:flex;
            justify-content: center !important;
        }
        .card {
            padding-top: 5px;
            padding-left: 8px;
            padding-right: 8px;
            padding-bottom: 5px;
            width: 50%;
        }

    </style>
@endsection

@section('contenido-central')
<div class="main ">
    <div class="container">

        <div class="tarjeta">
            <div class="card card-nav-tabs text-center">
                {!! Form::open(['route' => ['empleados.store']]) !!}

                @include('gestion-administrativa.empleado.partials.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
        
</div>
@endsection
@section('scripts')
    $('#calendario').datetimepicker({
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
    }
    });
@endsection