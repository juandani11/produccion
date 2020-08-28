<div class="form-group">
	{{ Form::label('cod_area', 'Código:') }}
	{{ Form::text('cod_area', null, ['class' => 'form-control', 'id' => 'cod_area']) }}
</div>
<div class="form-group">
	{{ Form::label('nombre_area', 'Nombre de Area:') }}
	{{ Form::text('nombre_area', null, ['class' => 'form-control', 'id' => 'nombre_area']) }}
</div>
<div class="form-group">
	{{ Form::label('id_departamento_area', 'Departamento al que pertenecerá:') }}
	{{ Form::text('id_departamento_area', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>