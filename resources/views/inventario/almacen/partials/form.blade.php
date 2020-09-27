<div class="form-group">
	{{ Form::label('nombre', 'Nombre Almacén:') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
</div>
<div class="form-group">
	{{ Form::label('codigo', 'Codigo:') }}
	{{ Form::text('codigo', null, ['class' => 'form-control','id' => 'codigo']) }}
</div>
<div class="form-group">
	{{ Form::label('descripcion', 'Descripción:') }}
	{{ Form::text('descripcion', null, ['class' => 'form-control','id' => 'descripcion']) }}
</div>
<div class="form-group">
    {{Form::label('id_sucursal_almacen','Seleccionar Sucursal: ')}}
    <select name="id_sucursal_almacen" id="id_sucursal_almacen">Seleccionar Sucursal
        @foreach($sucursales as $sucursal)
            <option value="{{ $sucursal->id_sucursal }}"
				@if( $sucursal->id_sucursal === $almacen->id_sucursal_almacen)
					selected
				@endif
				>
				{{$sucursal->nombre_sucursal}}
			</option>
        @endforeach
    </select>
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>