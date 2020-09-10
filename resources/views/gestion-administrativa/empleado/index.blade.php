@extends('layouts.menu')

@section('title', 'Gestión Empleado | MRP')

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
            <h2 class="title text-center">Empleado
                @can('empleados.create')
                    <a href="{{ route('empleados.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear Nuevo Empleado
                    </a>
                @endcan
            </h2>


            <div class="card" >
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Código</th>
                                <th>Nombre Empleado</th>
                                <th>Cedula</th>
                                <th>Dirección</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($empleados as $empleado)
                            <tr>
                                <td>{{ $empleado->id_empleado }}</td>
                                <td>{{ $empleado->cod_empleado }}</td>
                                <td>{{ $empleado->nombre_empleado }}</td>
                                <td>{{ $empleado->cedula_empleado }}</td>
                                <td>{{ $empleado->direccion_empleado}}</td>
                                @can('empleados.show')
                                <td width="10px">
                                    <a href="{{ route('empleados.show', $empleado->id_empleado) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('empleados.edit')
                                <td width="10px">
                                    <a href="{{ route('empleados.edit', $empleado->id_empleado) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('empleados.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['empleados.destroy', $empleado->id_empleado], 
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
                        {{ $empleados->links() }}
                    </div>
                    
                </div>

        </div>

    </div>
        
</div>

@endsection
