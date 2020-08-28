@extends('layouts.menu')

@section('title', 'Crear Nueva Area')

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
                {!! Form::open(['route' => ['areas.store']]) !!}

                @include('gestion-administrativa.area.partials.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
        
</div>
@endsection