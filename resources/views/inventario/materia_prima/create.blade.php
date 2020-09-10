@extends('layouts.menu')

<<<<<<< HEAD
@section('title', 'Bienvenido a ' . config('app.name'))
=======
@section('title', Crear Materia Prima)
>>>>>>> upstream/master

@section('body-class', 'landing-page')

@section('styles')
    <style>

        .tarjeta {
<<<<<<< HEAD
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
=======
            justify-content: center !important;
        }
>>>>>>> upstream/master

    </style>
@endsection

@section('contenido-central')
<div class="main ">
    <div class="container">

<<<<<<< HEAD
        <div class="section">
            <br>
            <br>

            <div class="tarjeta">
            <div class="card card-nav-tabs text-center">
=======
        <div class="tarjeta">
            <div class="card card-crud card-nav-tabs text-center">
>>>>>>> upstream/master
                {!! Form::open(['route' => ['materia_prima.store']]) !!}

                @include('inventario.materia_prima.partials.form')

                {!! Form::close() !!}
            </div>
<<<<<<< HEAD
            </div>

=======
>>>>>>> upstream/master
        </div>

    </div>
        
</div>

<<<<<<< HEAD
@include('includes.footer')
=======
>>>>>>> upstream/master
@endsection