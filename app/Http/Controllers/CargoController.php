<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\CArgo;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargo::paginate();

        return view('gestion-administrativa.cargo.index', compact('cargos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestion-administrativa.cargo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cargo = Cargo::create($request->all());

        return redirect()->route('cargos.edit', $cargo->id_cargo)
            ->with('info', 'Cargo guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_cargo
     * @return \Illuminate\Http\Response
     */
    public function show($id_cargo)
    {
        $cargo = Cargo::find($id_cargo);
        return view('gestion-administrativa.cargo.show', compact('cargo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_cargo
     * @return \Illuminate\Http\Response
     */
    public function edit($id_cargo)
    {
        $cargo = Cargo::find($id_cargo);

        return view('gestion-administrativa.cargo.edit', compact('cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_cargo)
    {
        $cargo = Cargo::find($id_cargo);
        $cargo->nombre_cargo = $request->input('nombre_cargo');
        $cargo->cod_cargo = $request->input('cod_cargo');
        $cargo->descripcion = $request->input('descripcion');
        $cargo->save();

        return redirect()->route('cargos.edit', $cargo->id_cargo)
            ->with('info', 'Cargo guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_cargo)
    {
        $mensaje = Cargo::find($id_cargo);
        $cargo = Cargo::find($id_cargo)->delete();
        
        Log::info( 'Cargo eliminado, detalle: ' .$mensaje->$id_cargo . ' ' . $mensaje->nombre_cargo . ' ' . $mensaje->cod_cargo );
        return back()->with('info', 'Eliminado correctamente');
    }
}
