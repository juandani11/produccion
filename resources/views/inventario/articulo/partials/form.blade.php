<div class="form-group">
<<<<<<< HEAD
	{{ Form::label('nombre', 'Nombre del articulo:') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
</div>
<div class="form-group">
	{{ Form::label('codigo', 'Codigo:') }}
	{{ Form::textarea('codigo', null, ['class' => 'form-control','id' => 'codigo','rows'=>'1']) }}
</div>
<div class="form-group">
	{{ Form::label('precio_venta', 'Precio venta:') }}
	{{ Form::textarea('precio_venta', null, ['class' => 'form-control','id' => 'precio_venta','rows'=>'1']) }}
=======
	{{ Form::label('nombre', 'Nombre del Articulo:') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
</div>
<div class="form-group">
	{{ Form::label('codigo', 'Código:') }}
	{{ Form::text('codigo', null, ['class' => 'form-control','id' => 'codigo']) }}
</div>
<div class="form-group">
	{{ Form::label('precio_venta', 'Precio Venta:') }}
	{{ Form::text('precio_venta', null, ['class' => 'form-control','id' => 'precio_venta']) }}
>>>>>>> upstream/master
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>