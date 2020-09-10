<div class="form-group">
	{{ Form::label('nombre', 'Nombre del proveedor:') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
</div>
<div class="form-group">
	{{ Form::label('codigo', 'Codigo:') }}
<<<<<<< HEAD
	{{ Form::textarea('codigo', null, ['class' => 'form-control','id' => 'codigo','rows'=>'1']) }}
</div>
<div class="form-group">
	{{ Form::label('telefono', 'Telefono:') }}
	{{ Form::textarea('telefono', null, ['class' => 'form-control','id' => 'telefono','rows'=>'1']) }}
=======
	{{ Form::text('codigo', null, ['class' => 'form-control','id' => 'codigo']) }}
</div>
<div class="form-group">
	{{ Form::label('telefono', 'Telefono:') }}
	{{ Form::text('telefono', null, ['class' => 'form-control','id' => 'telefono']) }}
>>>>>>> upstream/master
</div>
<div>
    <label for="src">Seleccionar imagen</label>
    <input type="file" id="src" name="src" class="form-control" >

</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>