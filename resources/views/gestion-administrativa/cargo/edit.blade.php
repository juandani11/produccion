@extends('layouts.menu')

@section('title', 'Editar | MRP')

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
                {!! Form::model($cargo, ['route' => ['cargos.update', $cargo->id_cargo], 'method' => 'PUT']) !!}
            
                    @include('gestion-administrativa.cargo.partials.form')

                {!! Form::close() !!}
            </div>
        </div>

    </div>
        
</div>
@endsection