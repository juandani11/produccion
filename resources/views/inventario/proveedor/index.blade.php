@extends('layouts.menu')

@section('title', 'Gestion proovedores ')

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
            <h2 class="title text-center">Proveedor
                @can('proveedor.create')
                    <a href="{{ route('proveedor.create') }}"
                    class="btn btn-sm btn-primary pull-right">
                        Crear Nuevo Proveedor...
                    </a>
                @endcan

            </h2>


            <div class="card" >
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Codigo</th>
                                <th>Estado</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($proveedors as $proveedor)
                            <tr>
                                <td>{{ $proveedor->id }}</td>
                                <td>{{ $proveedor->nombre }}</td>
                                <td>{{ $proveedor->telefono }}</td>
                                <td>{{ $proveedor->codigo }}</td>
                                <td class="list-group-item">
                                    <p class="list-group-item-text">
                                        @if($proveedor->estado = 1)
                                            <span class="label label-success">Activo</span>
                                        @else
                                            <span class="label label-danger">Inactivo</span>
                                        @endif
                                    </p></td>
                                @can('proveedor.show')
                                <td width="10px">
                                    <a href="{{ route('proveedor.show', $proveedor->id) }}"
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('proveedor.edit')
                                <td width="10px">
                                    <a href="{{ route('proveedor.edit', $proveedor->id) }}"
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('proveedor.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['proveedor.destroy', $proveedor->id],
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
                        {{ $proveedors->links() }}
                    </div>
                    
                </div>

        </div>

    </div>
        
</div>


@endsection
