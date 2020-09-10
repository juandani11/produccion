<div class="form-group">
	{{ Form::label('nombre', 'Nombre de la materia prima:') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
</div>
<div class="form-group">
	{{ Form::label('codigo', 'Codigo:') }}
<<<<<<< HEAD
	{{ Form::textarea('codigo', null, ['class' => 'form-control','id' => 'codigo','rows'=>'1']) }}
</div>
<div class="form-group">
	{{ Form::label('precio', 'Precio:') }}
	{{ Form::textarea('precio', null, ['class' => 'form-control','id' => 'precio','rows'=>'1']) }}
=======
	{{ Form::text('codigo', null, ['class' => 'form-control','id' => 'codigo']) }}
</div>
<div class="form-group">
	{{ Form::label('precio', 'Precio:') }}
	{{ Form::text('precio', null, ['class' => 'form-control','id' => 'precio']) }}
>>>>>>> upstream/master
</div>
<div class="form-group">
    {{Form::label('proveedor_id','Seleccionar proveedor: ')}}
    <select name="proveedor_id" id="proveedor_id">Seleccionar proveedor
<<<<<<< HEAD
        @foreach($proveedors as $proovedor)
            <option value="{{$proovedor->id}}">{{$proovedor->nombre}}</option>
=======
        @foreach($proveedors as $proveedor)
            <option value="{{ $proveedor->id }}">{{$proveedor->nombre}}</option>
>>>>>>> upstream/master
        @endforeach
    </select>
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>