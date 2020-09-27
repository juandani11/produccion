@extends('layouts.menu')

@section('title', 'Nómina | MRP')

@section('styles')
    <style>
      .row {
        text-align: center !important;
        padding-left: 20px;
        padding-right: 20px;
      }

      .info {
        padding-top: 40px;
      }
    </style>
@endsection

@section('contenido-central')
<div class="card" >
    <table class="table">
        <thead>
            <tr>
                <th width="10px">ID</th>
                <th>Empleado</th>
                <th>Area</th>
                <th>Cargo</th>
                <th>Sucursal</th>
                <th>Fecha inicio</th>
                <th>Obs</th>
                <th>Estado</th>
                <th colspan="3">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
            <tr>
                <td>{{ $empleado->id_historial_empleado }}</td>
                <td>{{ $empleado->nombre_empleado }}</td>
                <td>{{ $empleado->nombre_area }}</td>
                <td>{{ $empleado->nombre_cargo }}</td>
                <td>{{ $empleado->nombre_sucursal }}</td>
                <td>{{ $empleado->fecha_inicio }}</td>
                <td>{{ $empleado->observacion }}</td>
                <td class="list-group-item">
                    <p class="list-group-item-text">
                        @if($empleado->estado = 1)
                            <span class="label label-success">Activo</span>
                        @else
                            <span class="label label-danger">Inactivo</span>
                        @endif
                    </p></td>
            </tr>
            @endforeach
    </tbody>
    </table>                 
</div>
@endsection