@extends('layouts.menu')

@section('title', 'Almacén | MRP')

@section('body-class', 'landing-page')

@section('styles')
    <style>
        h1.title {
            font-size: 3rem;
        }
        ul.pagination {
            justify-content: center;
        }
        .section {
          padding: 5px !important; 
        }

    </style>
@endsection

@section('contenido-central')
<div class="main ">
    <div class="container">

        <div class="section">
            <h2 class="title text-center">Almacén

                @can('proveedor.create')
                    <a href="{{ route('almacen.create') }}"
                    class="btn btn-sm btn-primary pull-right">
                        Crear Nuevo Almacén...
                    </a>
                @endcan
            </h2>


            <div class="card" >
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Codigo</th>
                                <th>Id Sucursal</th>
                                <th>Sucursal</th>
                                <th>Estado</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($almacenes as $almacen)
                            <tr>
                                <td>{{ $almacen->id }}</td>
                                <td>{{ $almacen->nombre }}</td>
                                <td>{{ $almacen->descripcion }}</td>
                                <td>{{ $almacen->codigo }}</td>
                                <td>{{ $almacen->id_sucursal_almacen }}</td>
                                <td>{{ $almacen->nombre_sucursal }}</td>
                                <td class="list-group-item">
                                    <p class="list-group-item-text">
                                        @if($almacen->estado = 1)
                                            <span class="label label-success">Activo</span>
                                        @else
                                            <span class="label label-danger">Inactivo</span>
                                        @endif
                                    </p></td>
                                @can('almacen.show')
                                <td width="10px">
                                    <a href="{{ route('almacen.show', $almacen->id) }}"
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('almacen.edit')
                                <td width="10px">
                                    <a href="{{ route('almacen.edit', $almacen->id) }}"
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('almacen.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['almacen.destroy', $almacen->id],
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
                        {{ $almacenes->links() }}
                    </div>
                    
                </div>

        </div>

    </div>
        
</div>


@endsection
