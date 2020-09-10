@extends('layouts.menu')

<<<<<<< HEAD
@section('title', 'Bienvenido a ' . config('app.name'))
=======
@section('title', 'Proveedor '. $proveedor->nombre .' | MRP')
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


=======
<div class="tarjeta">
    <div class="card col-md-6">
        <div class="card-title btn btn-primary">
            Proveedor
        </div>
        
        <div class="card-body">
            <div class="" style="text-align:center;">
                <img class="card-img-top" style="width:50%; padding-bottom:5px;"
                src="{{ $proveedor->src }}" rel="nofollow" alt="image proveedor">
            </div>
            <div class="detalle">
                <h4 class="item">Nombre:</h4>
                <p class="item">{{ $proveedor->nombre }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Código:</h4>
                <p class="item">{{ $proveedor->codigo }}</p>
            </div>
            <div class="detalle">
                <h4 class="item">Teléfono: </h4>
                <p class="item">{{ $proveedor->telefono }}</p>
            </div>
        </div>
        <div class=" text-muted">
            Estado:
            @if($proveedor->estado = 1)
                Activo
            @else
                Inactivo
            @endif
        </div>
    </div>
</div>
>>>>>>> upstream/master
@endsection