<div class="form-group">
	{{ Form::label('codigo', 'Código:') }}
	{{ Form::text('codigo', null, ['class' => 'form-control', 'id' => 'codigo']) }}
</div>
<div class="form-group">
	{{ Form::label('nombre_sucursal', 'Nombre de Sucursal:') }}
	{{ Form::text('nombre_sucursal', null, ['class' => 'form-control', 'id' => 'name']) }}
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
	{{ Form::label('estado_sucursal', 'Estado:') }}
	{{ Form::textarea('estado_sucursal', null, ['class' => 'form-control', 'rows' => '1']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>