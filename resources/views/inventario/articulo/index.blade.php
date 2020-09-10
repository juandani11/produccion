@extends('layouts.menu')

@section('title', 'Gestion Articulos ')

@section('body-class', 'landing-page')

@section('styles')
    <style>
        h1.title {
            font-size: 3rem;
        }
        ul.pagination {
            justify-content: center;
        }.section {
             padding: 5px !important;
         }

    </style>
@endsection

@section('contenido-central')
<div class="main ">
    <div class="container">

        <div class="section">
            <h2 class="title text-center">Articulo
                @can('articulo.create')
                    <a href="{{ route('articulo.create') }}"
                    class="btn btn-sm btn-primary pull-right">
                        Crear Nuevo Articulo...
                    </a>
                @endcan

            </h2>


            <div class="card" >
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Precio venta</th>
                                <th>Codigo</th>
                                <th>Estado</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articulos as $articulo)
                            <tr>
                                <td>{{ $articulo->id }}</td>
                                <td>{{ $articulo->nombre }}</td>
                                <td>{{ $articulo->precio_venta }}</td>
                                <td>{{ $articulo->codigo }}</td>
                                <td class="list-group-item">
                                    <p class="list-group-item-text">
                                        @if($articulo->estado = 1)
                                            <span class="label label-success">Activo</span>
                                        @else
                                            <span class="label label-danger">Inactivo</span>
                                        @endif
                                    </p></td>
                                @can('articulo.show')
                                <td width="10px">
                                    <a href="{{ route('articulo.show', $articulo->id) }}"
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('articulo.edit')
                                <td width="10px">
                                    <a href="{{ route('articulo.edit', $articulo->id) }}"
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('articulo.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['articulo.destroy', $articulo->id],
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                    @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $articulos->links() }}
                    </div>
                    
                </div>

        </div>

    </div>
        
</div>


@endsection
