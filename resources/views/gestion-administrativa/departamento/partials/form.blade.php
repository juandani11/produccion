<div class="form-group">
	{{ Form::label('cod_departamento', 'Código:') }}
	{{ Form::text('cod_departamento', null, ['class' => 'form-control', 'id' => 'cod_departamento']) }}
</div>
<div class="form-group">
	{{ Form::label('nombre_departamento', 'Nombre de Departamento:') }}
	{{ Form::text('nombre_departamento', null, ['class' => 'form-control', 'id' => 'nombre_departamento']) }}
</div>
<div class="form-group">
	{{ Form::label('id_sucursal_departamento', 'Sucursal al que pertenecerá:') }}
	{{ Form::text('id_sucursal_departamento', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>