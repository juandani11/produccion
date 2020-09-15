@extends('layouts.menu')

@section('title', 'Editar | MRP')

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

        <div class="btn-group">
            <a href="{{route('almacen.index')}}"
               class="btn btn-sm btn-default">
                volver
            </a>
        </div>

        <div class="tarjeta">
            <div class="card card-crud card-nav-tabs text-center">
                {!! Form::model($almacen, ['route' => ['almacen.update', $almacen->id], 'method' => 'PUT']) !!}

                @include('inventario.almacen.partials.form')

                {!! Form::close() !!}
            </div>

        </div>
        
    </div>
        
</div>


@endsection