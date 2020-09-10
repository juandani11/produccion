@extends('layouts.menu')

<<<<<<< HEAD
@section('title', 'Bienvenido a ' . config('app.name'))
=======
@section('title', $materia_prima->nombre .' | MRP')
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
            
            width: 50%;
        }
=======
        

>>>>>>> upstream/master

    </style>
@endsection

@section('contenido-central')
<<<<<<< HEAD
<div class="main ">
    <div class="container">

        <div class="section">
            <br>
            <br>
            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <div class="card-body">
                        <div class="card card-nav-tabs text-center">
                            <div class="card-header card-header-primary text-capitalize">
                                Materia Prima :{{ $materia_prima->nombre }}
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Codigo : {{ $materia_prima->codigo }}</h4>
                                <h4 class="card-title">Precio : {{ $materia_prima->precio }}</h4>
                                <h4 class="card-title">Proveedor : {{ $materia_prima->proveedor->nombre }}</h4>
                                <h4 class="card-title">ID : {{ $materia_prima->id }}</h4>
                            </div>
                            <div class=" card-title">
                                Estado :
                                @if($materia_prima->estado = 1)
                                    <span class="label label-success">Activo</span>
                                @else
                                    <span class="label label-danger">Inactivo</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">

                            <a href="{{route('materia_prima.index')}}"
                               class="btn btn-sm btn-default">
                                volver
                            </a>

                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

@include('includes.footer')
=======
<div class="tarjeta">
    <div class="card col-md-6">
        <div class="card-title btn btn-primary">
            Materia Prima
        </div>
        
        <div class="card-body">
            <div class="detalle">
                <h4 class="item">Nombre:</h4>
                <p class="item">{{ $materia_prima->nombre }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Código:</h4>
                <p class="item">{{ $materia_prima->codigo }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Precio: </h4>
                <p class="item">{{ $materia_prima->precio }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Proveedor: </h4>
                <p class="item">{{ $materia_prima->proveedor->nombre }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Id Materia Prima: </h4>
                <p class="item">{{ $materia_prima->id }}</p>
            </div>
        </div>
        <div class=" text-muted">
            Estado:
            @if($materia_prima->estado = 1)
                Activo
            @else
                Inactivo
            @endif
        </div>
    </div>
</div>
>>>>>>> upstream/master
@endsection