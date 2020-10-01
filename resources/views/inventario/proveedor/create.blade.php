@extends('layouts.menu')

<<<<<<< HEAD
@section('title', 'Bienvenido a ' . config('app.name'))
=======
@section('title', 'Crear | MRP')
>>>>>>> upstream/master

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
                {!! Form::open(['route' => ['proveedor.store']]) !!}

                @include('inventario.proveedor.partials.form')

                {!! Form::close() !!}
            </div>
            </div>



    </div>
        
</div>

<<<<<<< HEAD
@include('includes.footer')
=======
>>>>>>> upstream/master
@endsection