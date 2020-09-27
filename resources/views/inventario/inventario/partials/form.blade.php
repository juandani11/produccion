<div class="form-group">
	{{ Form::label('cantidad', 'Cantidad:') }}
	{{ Form::text('cantidad', null, ['class' => 'form-control', 'id' => 'cantidad']) }}
</div>
<div class="form-group">
	{{ Form::label('reserva', 'Reserva:') }}
	{{ Form::text('reserva', null, ['class' => 'form-control','id' => 'reserva']) }}
</div>
<div class="form-group">
	{{ Form::label('unidad_medida', 'Unidad de medida:') }}
	{{ Form::text('unidad_medida', null, ['class' => 'form-control','id' => 'unidad_medida']) }}
</div>
<div class="form-group">
	{{ Form::label('disponibilidad', 'Disponibilidad:') }}
	{{ Form::text('disponibilidad', null, ['class' => 'form-control','id' => 'disponibilidad']) }}
</div>
<div class="form-group">
    {{Form::label('almacen_id','Seleccionar Almacén: ')}}
    <select name="almacen_id" id="almacen_id">Seleccionar Almacén
        @foreach($almacenes as $almacen)
            <option value="{{ $almacen->id }}"
				@if( $almacen->id === $almacen->almacen_id)
					selected
				@endif
				>
				{{$almacen->nombre}}
			</option>
        @endforeach
    </select>
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>