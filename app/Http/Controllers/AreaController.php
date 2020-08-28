<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Area;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::paginate();

        return view('gestion-administrativa.area.index', compact('areas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestion-administrativa.area.create');
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
        return view('gestion-administrativa.area.show', compact('area'));
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

        return view('gestion-administrativa.area.edit', compact('area'));
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
