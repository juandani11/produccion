@extends('layouts.menu')

@section('title', 'Gestión Departamento')

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
            <h2 class="title text-center">Departamento
                @can('departamentos.create')
                    <a href="{{ route('departamentos.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear Nuevo Departamento
                    </a>
                @endcan
            </h2>


            <div class="card" >
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Código</th>
                                <th>Nombre Departamento</th>
                                <th>Id Sucursal</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($departamentos as $departamento)
                            <tr>
                                <td>{{ $departamento->id_departamento }}</td>
                                <td>{{ $departamento->cod_departamento }}</td>
                                <td>{{ $departamento->nombre_departamento }}</td>
                                <td>{{ $departamento->id_sucursal_departamento}}</td>
                                @can('departamento.show')
                                <td width="10px">
                                    <a href="{{ route('departamentos.show', $departamento->id_departamento) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('departamentos.edit')
                                <td width="10px">
                                    <a href="{{ route('departamentos.edit', $departamento->id_departamento) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('departamento.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['departamentos.destroy', $departamento->id_departamento], 
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
                        {{ $departamentos->links() }}
                    </div>
                    
                </div>

        </div>

    </div>
        
</div>

@endsection
