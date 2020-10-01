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

        <div class="panel">
            <div class="panel-body">
                {!! Form::open(['route' => ['orden_aprovisionamiento.store']]) !!}

                @include('compra.orden_aprovisionamiento.partials.form')

                {!! Form::close() !!}
            </div>
        </div>

    </div>
        
</div>

@endsection