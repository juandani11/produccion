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
            padding-top: 5px;
            padding-left: 8px;
            padding-right: 8px;
            padding-bottom: 5px;
            width: 50%;
        }
    </style>
@endsection

@section('contenido-central')
<div class="main ">
    <div class="container">


            <div class="btn-group">

                <a href="{{route('proveedor.index')}}"
                   class="btn btn-sm btn-default">
                    volver
                </a>

            </div>
            <div class="tarjeta">
            <div class="card card-nav-tabs text-center">
            {!! Form::model($proveedor, ['route' => ['proveedor.update', $proveedor->id], 'method' => 'PUT']) !!}

                @include('inventario.proveedor.partials.form')

                {!! Form::close() !!}
            </div>

            </div>



    </div>
        
</div>

@endsection