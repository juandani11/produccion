<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Area;
use App\Departamento;
use Illuminate\Support\Facades\DB;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = DB::table('Area')
            ->join('Departamento', 'id_departamento_area', '=', 'id_departamento')
            ->select('Area.*', 'nombre_departamento')
            ->paginate(15);

        return view('gestion-administrativa.area.index', compact('areas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Departamento::all();
        $area= Area::first(); //variable que solo permite compaginar el selected en input-group
        return view('gestion-administrativa.area.create', compact('departamentos'), compact('area'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $area = Area::create($request->all());
        $departamentos = Departamento::all();
        return redirect()->route('areas.edit', $area->id_area)
            ->with('info', 'Area guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_area
     * @return \Illuminate\Http\Response
     */
    public function show($id_area)
    {
        $area = Area::find($id_area);
        $departamentos = Departamento::find($area->id_departamento_area);
        return view('gestion-administrativa.area.show', compact('area'), compact('departamentos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_area
     * @return \Illuminate\Http\Response
     */
    public function edit($id_area)
    {
        $area = Area::find($id_area);
        $departamentos = Departamento::all();

        return view('gestion-administrativa.area.edit', compact('area'), compact('departamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_area)
    {
        $area = Area::find($id_area);
        $area->nombre_area = $request->input('nombre_area');
        $area->cod_area = $request->input('cod_area');
        $area->id_departamento_area = $request->input('id_departamento_area');
        $area->save();

        return redirect()->route('areas.edit', $area->id_area)
            ->with('info', 'Area guardada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_area
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_area)
    {
        $mensaje = Area::find($id_area);
        $area = Area::find($id_area)->delete();
        
        Log::info( 'Area eliminada: ' .$mensaje->$id_area . ' ' . $mensaje->nombre_area . ' ' . $mensaje->cod_area );
        return back()->with('info', 'Eliminada correctamente');
    }
}
