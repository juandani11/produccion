@extends('layouts.menu')

@section('title', 'Bienvenido a ' . config('app.name'))

@section('body-class', 'landing-page')

@section('styles')
    <style>

        .tarjeta {
            display:flex;
            justify-content: center !important;
        }
        .card {
            
            width: 50%;
        }

    </style>
@endsection

@section('contenido-central')
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

</div>


@endsection