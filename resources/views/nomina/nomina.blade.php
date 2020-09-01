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
                <th>Area</th>
                <th>Cargo</th>
                <th>Nombre Empleado</th>
                <th colspan="3">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Area de producción</td>
                <td>Operador A</td>
                <td>Maria Martha Carmen Julia</td>
            </tr>
        </tbody>
    </table>                 
</div>
@endsection