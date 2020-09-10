@extends('layouts.menu')

@section('title', 'Materia Prima | MRP')

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
            <h2 class="title text-center">Materia Prima

                @can('proveedor.create')
                    <a href="{{ route('materia_prima.create') }}"
                    class="btn btn-sm btn-primary pull-right">
                        Crear Nueva Materia Prima...
                    </a>
                @endcan
            </h2>


            <div class="card" >
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Codigo</th>
                                <th>Proveedor</th>
                                <th>Estado</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($materia_primas as $materia_prima)
                            <tr>
                                <td>{{ $materia_prima->id }}</td>
                                <td>{{ $materia_prima->nombre }}</td>
                                <td>{{ $materia_prima->precio }}</td>
                                <td>{{ $materia_prima->codigo }}</td>
                                <td>{{ $materia_prima->proveedor->nombre }}</td>
                                <td class="list-group-item">
                                    <p class="list-group-item-text">
                                        @if($materia_prima->estado = 1)
                                            <span class="label label-success">Activo</span>
                                        @else
                                            <span class="label label-danger">Inactivo</span>
                                        @endif
                                    </p></td>
                                @can('materia_prima.show')
                                <td width="10px">
                                    <a href="{{ route('materia_prima.show', $materia_prima->id) }}"
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('materia_prima.edit')
                                <td width="10px">
                                    <a href="{{ route('materia_prima.edit', $materia_prima->id) }}"
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('materia_prima.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['materia_prima.destroy', $materia_prima->id],
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
                        {{ $materia_primas->links() }}
                    </div>
                    
                </div>

        </div>

    </div>
        
</div>


@endsection
