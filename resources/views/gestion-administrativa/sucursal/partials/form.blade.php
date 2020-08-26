<div class="form-group">
	{{ Form::label('cod_sucursal', 'Código:') }}
	{{ Form::text('cod_sucursal', null, ['class' => 'form-control', 'id' => 'cod_sucursal']) }}
</div>
<div class="form-group">
	{{ Form::label('nombre_sucursal', 'Nombre de Sucursal:') }}
	{{ Form::text('nombre_sucursal', null, ['class' => 'form-control', 'id' => 'nombre_sucursal']) }}
</div>
<div class="form-group">
	{{ Form::label('descripcion', 'Descripción:') }}
	{{ Form::textarea('descripcion', null, ['class' => 'form-control','rows' => '3']) }}
</div>
<div class="form-group">
	{{ Form::label('direccion', 'Dirección:') }}
	{{ Form::textarea('direccion', null, ['class' => 'form-control','rows' => '5']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>