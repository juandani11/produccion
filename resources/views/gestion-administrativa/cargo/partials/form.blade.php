<div class="form-group">
	{{ Form::label('cod_cargo', 'Código:') }}
	{{ Form::text('cod_cargo', null, ['class' => 'form-control', 'id' => 'cod_cargo']) }}
</div>
<div class="form-group">
	{{ Form::label('nombre_cargo', 'Nombre de Area:') }}
	{{ Form::text('nombre_cargo', null, ['class' => 'form-control', 'id' => 'nombre_cargo']) }}
</div>
<div class="form-group">
	{{ Form::label('descripcion', 'Descripción:') }}
	{{ Form::text('descripcion', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>