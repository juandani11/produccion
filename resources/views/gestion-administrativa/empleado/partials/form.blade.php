<div class="form-group">
	{{ Form::label('cod_empleado', 'Código Empleado:') }}
	{{ Form::text('cod_empleado', null, ['class' => 'form-control', 'id' => 'cod_empleado']) }}
</div>
<div class="form-group">
	{{ Form::label('nombre_empleado', 'Nombre Empleado:') }}
	{{ Form::text('nombre_empleado', null, ['class' => 'form-control', 'id' => 'nombre_empleado']) }}
</div>
<div class="form-group">
	{{ Form::label('cedula_empleado', 'Cédula:') }}
	{{ Form::text('cedula_empleado', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('email_empleado', 'Correo Electróncio:') }}
	{{ Form::email('email_empleado', null, ['class' => 'form-control','placeholder'=>'name@example.com']) }}
</div>
<div class="form-group">
	{{ Form::label('direccion_empleado', 'Dirección:') }}
	{{ Form::text('direccion_empleado', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('telefono_empleado', 'Teléfono:') }}
	{{ Form::text('telefono_empleado', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('fecha_nacimiento_empleado', 'Fecha Nacimiento:') }}
	{{ Form::text('fecha_nacimiento_empleado', null, ['class' => 'form-control datetimepicker','value'=>'08/25/2020', 'id' => 'calendario']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>