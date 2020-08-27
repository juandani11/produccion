<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Departamento;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::paginate();

        return view('gestion-administrativa.departamento.index', compact('departamentos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestion-administrativa.departamento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departamento = Departamento::create($request->all());

        return redirect()->route('departamentos.edit', $departamento->id_departamento)
            ->with('info', 'Departamento guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_departamento
     * @return \Illuminate\Http\Response
     */
    public function show($id_departamento)
    {
        $departamento = Departamento::find($id_departamento);
        return view('gestion-administrativa.departamento.show', compact('departamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_departamento
     * @return \Illuminate\Http\Response
     */
    public function edit($id_departamento)
    {
        $departamento = Departamento::find($id_departamento);

        return view('gestion-administrativa.departamento.edit', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_departamento)
    {
        $departamento = Departamento::find($id_departamento);
        $departamento->nombre_departamento = $request->input('nombre_departamento');
        $departamento->cod_departamento = $request->input('cod_departamento');
        $departamento->id_sucursal_departamento = $request->input('id_sucursal_departamento');
        $departamento->save();

        return redirect()->route('departamentos.edit', $departamento->id_departamento)
            ->with('info', 'Departamento guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_departamento)
    {
        $mensaje = Departamento::find($id_departamento);
        $departamento = Departamento::find($id_departamento)->delete();
        
        Log::info( 'Departamento eliminado: ' .$mensaje->$id_departamento . ' ' . $mensaje->nombre_departamento . ' ' . $mensaje->cod_departamento );
        return back()->with('info', 'Eliminada correctamento');
    }
}
