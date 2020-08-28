<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::paginate();

        return view('gestion-administrativa.empleado.index', compact('empleados'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestion-administrativa.empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = Empleado::create($request->all());

        return redirect()->route('empleados.edit', $empleado->id_empleado)
            ->with('info', 'Empleado guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_empleado
     * @return \Illuminate\Http\Response
     */
    public function show($id_empleado)
    {
        $empleado = Empleado::find($id_empleado);
        return view('gestion-administrativa.empleado.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id_empleado)
    {
        $empleado = Empleado::find($id_empleado);

        return view('gestion-administrativa.empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_empleado)
    {
        $empleado = Empleado::find($id_empleado);
        $empleado->nombre_empleado = $request->input('nombre_empleado');
        $empleado->cod_empleado = $request->input('cod_empleado');
        $empleado->cedula_empleado = $request->input('cedula_empleado');
        $empleado->email_empleado = $request->input('email_empleado');
        $empleado->direccion_empleado = $request->input('direccion_empleado');
        $empleado->telefono_empleado = $request->input('telefono_empleado');
        $empleado->fecha_nacimiento_empleado = $request->input('fecha_nacimiento_empleado');
        $empleado->save();

        return redirect()->route('empleados.edit', $empleado->id_empleado)
            ->with('info', 'Empleado guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_empleado)
    {
        $mensaje = Empleado::find($id_empleado);
        $empleado = Empleado::find($id_empleado)->delete();
        
        Log::info( 'Empleado eliminado, detalle: ' .$mensaje->$id_empleado . ' ' . $mensaje->nombre_empleado . ' ' . $mensaje->cod_empleado );
        return back()->with('info', 'Eliminado correctamente');
    }
}
