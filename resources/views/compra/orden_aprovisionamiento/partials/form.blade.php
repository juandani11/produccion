<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>

<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<div class="row">
        <div class="col-md-12 col-xs-12">
            <form>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="empleado_id">Empleado</label>
                            <input type="text" name="empleado_id" id="empleado_id" class="form-control" value="{{ auth()->user()->getAuthIdentifier() }}">
                        </div>
                    </div><!-- fin col-md-3 empleado -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="codigo">Codigo</label>
                            {{ Form::text('codigo', null, ['class' => 'form-control','id' => 'codigo'],Request::old('codigo')) }}
                        </div>
                    </div><!-- fin col-md-3 codigo-->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            {{ Form::text('fecha', null, ['class' => 'form-control','id' => 'fecha'],Request::old('fecha')) }}
                        </div>
                    </div><!-- fin col-md-3 decha-->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="hora">Hora</label>
                            {{ Form::text('hora', null, ['class' => 'form-control','type'=>'time','id' => 'hora'],Request::old('hora')) }}
                        </div>
                    </div><!-- fin col-md-3 hora-->
                </div><!-- fin row cabecera -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="obersvacion">Observacion</label>
                            {{ Form::text('observacion', null, ['class' => 'form-control','id' => 'observacion'], Request::old('observacion')) }}
                        </div>
                    </div><!-- fin col-md-12 observacion-->
                </div>
                <div class="row">
                    <div class="panel panel-body panel-primary">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="articulo">Artículo</label>
                                <select name="pid_articulo" id="pid_articulo" class="form-control selectpicker" data-live-search="true">
                                    @foreach($articulos as $art)
                                        <option value="{{ $art->id }}"
                                        >
                                            {{ $art->articulo }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="pcantidad">Cantidad</label>
                                <input type="number" name="pcantidad" id="pcantidad" class="form-control" placeholder="Cantidad">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <button type="button" id="bt_add" class="btn btn-primary">
                                    Agregar
                                </button>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="materia">Materia prima</label>
                                <select name="pid_materia" id="pid_materia" class="form-control selectpicker" data-live-search="true">
                                    @foreach($materia_primas as $mat)
                                        <option value="{{ $mat->id }}">
                                            {{ $mat->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="pcantidad2">Cantidad</label>
                                <input type="number" name="pcantidad2" id="pcantidad2" class="form-control" placeholder="Cantidad">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <button type="button" id="bt_add2" class="btn btn-primary">
                                    Agregar
                                </button>
                            </div>
                        </div>



                        <div class="col-md-12">
                            <table id="detalles" class="table table-striped table-bordered table-hover table-condensed" style="margin-top: 10px">
                                <thead style="background-color: #A9D0F5">
                                <th>Opciones</th>
                                <th>Materia prima o Articulo</th>
                                <th >Cantidad</th>
                                </thead>
                                <tfoot>
                                <th></th>
                                <th></th>
                                <th></th>
                                </tfoot>
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                    </div><!-- panel-body -->
                </div><!-- fin row detalle -->

                <div class="row">
                    <div class="col-md-12" id="guardar">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">
                                Guardar
                            </button>
                        </div>
                    </div>
                </div><!-- fin row buttons -->
            </form>

        </div>
    </div>

    <script>

        $(document).ready(function(){
            $("#bt_add").click(function(){
                agregar();
            });
            $("#bt_add2").click(function(){
                agregar2();
            });

        });
        var cont = 0;
        var total = 0;
        var subtotal = [];
        //Cuando cargue el documento
        //Ocultar el botón Guardar
        $("#guardar").hide();
        function agregar(){
            //Obtener los valores de los inputs
            id_articulo = $("#pid_articulo").val();
            articulo = $("#pid_articulo option:selected").text();
            cantidad = $("#pcantidad").val();
            //Validar los campos
            if(id_articulo != "" && cantidad > 0 ){
                var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+')">X</button></td><td><input type="hidden" name="id_articulo[]" value="'+id_articulo+'">'+articulo+'</td><td><input type="number" name="cantidad[]" value="'+cantidad+'"></tr>';
                cont++;
                limpiar();
                evaluar(cont);
                unirTodo(fila);

            }else{
                alert("Error al ingresar el detalle del ingreso, revise los datos del artículo");
            }
        }
        function unirTodo(fila) {
            $("#detalles").append(fila);
        }
        function limpiar(){
            $("#pcantidad").val("");
        }
        //Muestra botón guardar
        function evaluar(cont){
            if(cont > 0){
                $("#guardar").show();
            }else{
                $("#guardar").hide();
            }
        }
        function eliminar(index){
            total = total-subtotal[index];
            $("#total").html("$" + total);
            $("#fila" + index).remove();
            evaluar();
        }
        $('#fecha').datepicker({
            uiLibrary: 'bootstrap',
            format: 'yyyy/mm/dd'
        });
        //Cuando cargue el documento
        //Ocultar el botón Guardar
        function agregar2(){
            //Obtener los valores de los inputs
            id_materia = $("#pid_materia").val();
            materia = $("#pid_materia option:selected").text();
            cantidad2 = $("#pcantidad2").val();
            //Validar los campos
            if(id_materia != "" && cantidad2 > 0 ){
                var fila2 = '<tr class="selected" id="fila2'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+')">X</button></td><td><input type="hidden" name="id_materia[]" value="'+id_materia+'">'+materia+'</td><td><input type="number" name="cantidad2[]" value="'+cantidad2+'"></tr>';
                cont++;
                limpiar2();
                evaluar(cont);
                unirTodo(fila2);

            }else{
                alert("Error al ingresar el detalle del ingreso, revise los datos del artículo");
            }
        }
        function limpiar2(){
            $("#pcantidad2").val("");
        }
        $('#hora').timepicker({

            format: 'HH:mm:ss'

        });
    </script>

