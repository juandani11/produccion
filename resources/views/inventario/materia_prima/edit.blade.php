@extends('layouts.menu')

<<<<<<< HEAD
@section('title', 'Bienvenido a ' . config('app.name'))
=======
@section('title', Editar | MRP)
>>>>>>> upstream/master

@section('body-class', 'landing-page')

@section('styles')
    <style>
<<<<<<< HEAD

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
=======
        .tarjeta {
            justify-content: center !important;
        }
>>>>>>> upstream/master
    </style>
@endsection

@section('contenido-central')
<div class="main ">
    <div class="container">

        <div class="btn-group">
<<<<<<< HEAD

=======
>>>>>>> upstream/master
            <a href="{{route('materia_prima.index')}}"
               class="btn btn-sm btn-default">
                volver
            </a>
<<<<<<< HEAD

        </div>


            <div class="tarjeta">
            <div class="card card-nav-tabs text-center">
            {!! Form::model($materia_prima, ['route' => ['materia_prima.update', $materia_prima->id], 'method' => 'PUT']) !!}
=======
        </div>

        <div class="tarjeta">
            <div class="card card-crud card-nav-tabs text-center">
                {!! Form::model($materia_prima, ['route' => ['materia_prima.update', $materia_prima->id], 'method' => 'PUT']) !!}
>>>>>>> upstream/master

                @include('inventario.materia_prima.partials.form')

                {!! Form::close() !!}
            </div>

<<<<<<< HEAD
            </div>



=======
        </div>
        
>>>>>>> upstream/master
    </div>
        
</div>


@endsection