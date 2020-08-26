<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Sucursal;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursales = Sucursal::paginate();

        return view('gestion-administrativa.sucursal.index', compact('sucursales'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestion-administrativa.sucursal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sucursal = Sucursal::create($request->all());

        return redirect()->route('sucursales.edit', $sucursal->id_sucursal)
            ->with('info', 'Sucursal guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_sucursal
     * @return \Illuminate\Http\Response
     */
    public function show($id_sucursal)
    {
        $sucursal = Sucursal::find($id_sucursal);
        return view('gestion-administrativa.sucursal.show', compact('sucursal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_sucursal
     * @return \Illuminate\Http\Response
     */
    public function edit($id_sucursal)
    {
        $sucursal = Sucursal::where('id_sucursal',$id_sucursal)->first();

        return view('gestion-administrativa.sucursal.edit', compact('sucursal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_sucursal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_sucursal)
    {
        $sucursal = Sucursal::find($id_sucursal);
        $sucursal->nombre_sucursal = $request->input('nombre_sucursal');
        $sucursal->descripcion = $request->input('descripcion');
        $sucursal->direccion = $request->input('direccion');
        $sucursal->save();

        return redirect()->route('sucursales.edit', $sucursal->id_sucursal)
            ->with('info', 'Sucursal guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_sucursal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_sucursal)
    {
        $mensaje = Sucursal::find($id_sucursal);
        $sucursal = Sucursal::find($id_sucursal)->delete();
        
        Log::info( 'Sucursal eliminada: ' .$mensaje->$id_sucursal . ' ' . $mensaje->nombre_sucursal . ' ' . $mensaje->descripcion );
        return back()->with('info', 'Eliminada correctamente');
    }
}
