<div class="form-group">
	{{ Form::label('nombre', 'Nombre de la materia prima:') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
</div>
<div class="form-group">
	{{ Form::label('codigo', 'Codigo:') }}
	{{ Form::text('codigo', null, ['class' => 'form-control','id' => 'codigo']) }}
</div>
<div class="form-group">
	{{ Form::label('precio', 'Precio:') }}
	{{ Form::text('precio', null, ['class' => 'form-control','id' => 'precio']) }}
</div>
<div class="form-group">
    {{Form::label('proveedor_id','Seleccionar proveedor: ')}}
    <select name="proveedor_id" id="proveedor_id">Seleccionar proveedor
        @foreach($proveedors as $proovedor)
            <option value="{{ $proovedor->id }}">{{$proovedor->nombre}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>