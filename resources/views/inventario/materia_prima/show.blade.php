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
@endsection