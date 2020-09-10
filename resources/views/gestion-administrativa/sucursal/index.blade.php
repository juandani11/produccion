@extends('layouts.menu')

@section('title', 'Gestión Sucursal | MRP')

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
            <h2 class="title text-center">Sucursal
                @can('sucursales.create')
                    <a href="{{ route('sucursales.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear Nueva Sucursal
                    </a>
                @endcan
            </h2>


            <div class="card" >
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Código</th>
                                <th>Nombre Sucursal</th>
                                <th>Descripción</th>
                                <th>Dirección</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sucursales as $sucursal)
                            <tr>
                                <td>{{ $sucursal->id_sucursal }}</td>
                                <td>{{ $sucursal->cod_sucursal }}</td>
                                <td>{{ $sucursal->nombre_sucursal }}</td>
                                <td>{{ $sucursal->descripcion}}</td>
                                <td>{{ $sucursal->direccion }}</td>
                                @can('sucursales.show')
                                <td width="10px">
                                    <a href="{{ route('sucursales.show', $sucursal->id_sucursal) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('sucursales.edit')
                                <td width="10px">
                                    <a href="{{ route('sucursales.edit', $sucursal->id_sucursal) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('sucursales.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['sucursales.destroy', $sucursal->id_sucursal], 
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
                        {{ $sucursales->links() }}
                    </div>
                    
                </div>

        </div>

    </div>
        
</div>

@endsection
