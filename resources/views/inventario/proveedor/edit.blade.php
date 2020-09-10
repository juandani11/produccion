@extends('layouts.menu')

<<<<<<< HEAD
@section('title', 'Bienvenido a ' . config('app.name'))
=======
@section('title', 'Editar | MRP')
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

            <div class="btn-group">

                <a href="{{route('proveedor.index')}}"
                   class="btn btn-sm btn-default">
                    volver
                </a>

            </div>
            <div class="tarjeta">
            <div class="card card-nav-tabs text-center">
            {!! Form::model($proveedor, ['route' => ['proveedor.update', $proveedor->id], 'method' => 'PUT']) !!}
=======
        <div class="btn-group">
            <a href="{{route('proveedor.index')}}"
                class="btn btn-sm btn-default">
                volver
            </a>
        </div>
        
        <div class="tarjeta">
            <div class="card card-crud card-nav-tabs text-center">
                {!! Form::model($proveedor, ['route' => ['proveedor.update', $proveedor->id], 'method' => 'PUT']) !!}
>>>>>>> upstream/master

                @include('inventario.proveedor.partials.form')

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