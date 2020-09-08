<div class="form-group">
	{{ Form::label('nombre', 'Nombre del proveedor:') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
</div>
<div class="form-group">
	{{ Form::label('codigo', 'Codigo:') }}
	{{ Form::text('codigo', null, ['class' => 'form-control','id' => 'codigo']) }}
</div>
<div class="form-group">
	{{ Form::label('telefono', 'Telefono:') }}
	{{ Form::text('telefono', null, ['class' => 'form-control','id' => 'telefono']) }}
</div>
<div>
    <label for="src">Seleccionar imagen</label>
    <input type="file" id="src" name="src" class="form-control" >

</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>