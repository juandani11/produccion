@extends('layouts.menu')

@section('title', 'Gestión Cargo')

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
            <h2 class="title text-center">Cargo
                @can('cargos.create')
                    <a href="{{ route('cargos.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear Nuevo Cargo
                    </a>
                @endcan
            </h2>


            <div class="card" >
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Código</th>
                                <th>Nombre Cargo</th>
                                <th>Descripción</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cargos as $cargo)
                            <tr>
                                <td>{{ $cargo->id_cargo }}</td>
                                <td>{{ $cargo->cod_cargo }}</td>
                                <td>{{ $cargo->nombre_cargo }}</td>
                                <td>{{ $cargo->descripcion}}</td>
                                @can('cargos.show')
                                <td width="10px">
                                    <a href="{{ route('cargos.show', $cargo->id_cargo) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('cargos.edit')
                                <td width="10px">
                                    <a href="{{ route('cargos.edit', $cargo->id_cargo) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('cargos.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['cargos.destroy', $cargo->id_cargo], 
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
                        {{ $cargos->links() }}
                    </div>
                    
                </div>

        </div>

    </div>
        
</div>

@endsection
