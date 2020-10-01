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
            <a href="{{route('orden_aprovisionamiento.index')}}"
                class="btn btn-sm btn-default">
                volver
            </a>
        </div>
        
        <div class="panel">
            <div class="panel-body">
                {!! Form::model($aprovisionamiento, ['route' => ['orden_aprovisionamiento.update', $aprovisionamiento->id], 'method' => 'PUT']) !!}

                @include('compra.orden_aprovisionamiento.partials.form')

                {!! Form::close() !!}
            </div>

        </div>
    </div>
        
</div>

@endsection