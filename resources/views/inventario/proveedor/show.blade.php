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
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="card-body">
                        <img class="img-fluid" src="{{ asset('/img/Proveedor/'.$proveedor->src) }}" />
                    </div>
                </div>
                <div class="col-sm-6 col-md-8">
                    <div class="card-body">
                        <div class="card card-nav-tabs text-center">
                            <div class="card-header card-header-primary text-capitalize">
                                Proveedor {{ $proveedor->nombre }}
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Codigo : {{ $proveedor->codigo }}</h4>
                                <p class="card-text">Telefono : {{ $proveedor->telefono }}</p>
                            </div>
                            <div class=" text-muted">
                                Estado:
                                @if($proveedor->estado = 1)
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