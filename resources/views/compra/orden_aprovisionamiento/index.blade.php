@extends('layouts.menu')

@section('title', 'Orden de aprovisionamiento | MRP ')

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
            <h2 class="title text-center">Orden Aprovisionamiento
                @can('orden_aprovisionamiento.create')
                    <a href="{{ route('orden_aprovisionamiento.create') }}"
                    class="btn btn-sm btn-primary pull-right">
                        Crear Nueva Orden...
                    </a>
                @endcan

            </h2>


            <div class="card" >
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Observacion</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Codigo</th>
                                <th>Estado</th>
                                <th colspan="5">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($aprovisionamientos as $aprovisionamiento)
                            <tr>
                                <td>{{ $aprovisionamiento->id }}</td>
                                <td>{{ $aprovisionamiento->observacion }}</td>
                                <td>{{ $aprovisionamiento->Fecha }}</td>
                                <td>{{ $aprovisionamiento->hora }}</td>
                                <td>{{ $aprovisionamiento->codigo }}</td>
                                <td class="list-group-item">
                                    <p class="list-group-item-text">
                                        @if($aprovisionamiento->estado = 1)
                                            <span class="label label-success">Activo</span>
                                        @else
                                            <span class="label label-danger">Inactivo</span>
                                        @endif
                                    </p></td>
                                @can('orden_aprovisionamiento.show')
                                <td width="10px">
                                    <a href="{{ route('orden_aprovisionamiento.show', $aprovisionamiento->id) }}"
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('orden_aprovisionamiento.edit')
                                <td width="10px">
                                    <a href="{{ route('orden_aprovisionamiento.edit', $aprovisionamiento->id) }}"
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('orden_aprovisionamiento.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['orden_aprovisionamiento.destroy', $aprovisionamiento->id],
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
                        {{ $aprovisionamientos->links() }}
                    </div>
                    
                </div>

        </div>

    </div>
        
</div>


@endsection
