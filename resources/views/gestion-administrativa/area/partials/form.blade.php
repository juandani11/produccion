<div class="form-group">
	{{ Form::label('cod_area', 'Código:') }}
	{{ Form::text('cod_area', null, ['class' => 'form-control', 'id' => 'cod_area']) }}
</div>
<div class="form-group">
	{{ Form::label('nombre_area', 'Nombre de Area:') }}
	{{ Form::text('nombre_area', null, ['class' => 'form-control', 'id' => 'nombre_area']) }}
</div>
<div class="form-group">
    {{Form::label('id_departamento_area','Seleccionar departamento: ')}}
    <select name="id_departamento_area" id="id_departamento_area">Seleccionar departamento
        @foreach($departamentos as $departamento)
            <option value="{{ $departamento->id_departamento }}" 

                @if( $departamento->id_departamento===$area->id_departamento_area)
                    selected
                @endif
                >
                {{$departamento->nombre_departamento}}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>