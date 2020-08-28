@extends('layouts.menu')

@section('title', 'Gestión Area')

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
            <h2 class="title text-center">Area
                @can('areas.create')
                    <a href="{{ route('areas.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear Nueva Area
                    </a>
                @endcan
            </h2>


            <div class="card" >
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Código</th>
                                <th>Nombre Area</th>
                                <th>Id Departamento</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($areas as $area)
                            <tr>
                                <td>{{ $area->id_area }}</td>
                                <td>{{ $area->cod_area }}</td>
                                <td>{{ $area->nombre_area }}</td>
                                <td>{{ $area->id_departamento_area}}</td>
                                @can('areas.show')
                                <td width="10px">
                                    <a href="{{ route('areas.show', $area->id_area) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('areas.edit')
                                <td width="10px">
                                    <a href="{{ route('areas.edit', $area->id_area) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('areas.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['areas.destroy', $area->id_area], 
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
                        {{ $areas->links() }}
                    </div>
                    
                </div>

        </div>

    </div>
        
</div>

@endsection
