@extends('layouts.menu')

<<<<<<< HEAD
@section('title', 'Bienvenido a ' . config('app.name'))
=======
@section('title', 'Articulo '. $articulo->nombre .' | MRP')
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


            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <div class="card-body">
                        <div class="card card-nav-tabs text-center">
                            <div class="card-header card-header-primary text-capitalize">
                                Articulo {{ $articulo->nombre }}
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Codigo : {{ $articulo->codigo }}</h4>
                                <p class="card-text">Precio venta : {{ $articulo->precio_venta }}</p>
                            </div>
                            <div class=" text-muted">
                                Estado:
                                @if($articulo->estado = 1)
                                    <span class="label label-success">Activo</span>
                                @else
                                    <span class="label label-danger">Inactivo</span>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

=======
<div class="tarjeta">
    <div class="card col-md-6">
        <div class="card-title btn btn-primary">
            Artículo
        </div>
        
        <div class="card-body">
            <div class="detalle">
                <h4 class="item">Nombre:</h4>
                <p class="item">{{ $articulo->nombre }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Código:</h4>
                <p class="item">{{ $articulo->codigo }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Precio: </h4>
                <p class="item">{{ $articulo->precio_venta }}</p>
            </div>

        </div>
        <div class=" text-muted">
            Estado:
            @if($articulo->estado = 1)
                Activo
            @else
                Inactivo
            @endif
        </div>
    </div>
>>>>>>> upstream/master
</div>


@endsection