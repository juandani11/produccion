<?php

namespace App\Http\Controllers;

use App\Almacen;
use App\Sucursal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class AlmacenController extends Controller
{
    public function index()
    {
        $almacenes = DB::table('almacens')
            ->join('sucursal', 'id_sucursal_almacen', '=', 'id_sucursal')
            ->select('Almacens.*', 'nombre_sucursal')
            ->paginate(15);

        return view('inventario/almacen.index', compact('almacenes'));
    }
    public function create()
    {
        $sucursales = Sucursal::all();
        $almacen = Almacen::first();
        return view('inventario/almacen.create', compact('sucursales'), compact('almacen'));
    }
    public function store(Request $request)
    {
        $almacen = Almacen::create($request->all());
        $sucursales = Sucursal::all();

        return redirect()->route('almacen.edit', $almacen->id)
            ->with('info', 'Materia Prima guardada con éxito');
    }

    public function edit($id)
    {
        $almacen = Almacen::find($id);
        $sucursales = Sucursal::all();
        return view('inventario/almacen.edit', compact('almacen'), compact('sucursales'));
    }


    public function show($id)
    {
        $almacen = Almacen::find($id);
        $sucursal = Sucursal::find($almacen->id_sucursal_almacen);
        return view('inventario/almacen.show', compact('almacen'), compact('sucursal'));
    }

    public function update(Request $request, $id)
    {
        $almacen = Almacen::find($id);
        $almacen->nombre = $request->input('nombre');
        $almacen->descripcion = $request->input('descripcion');
        $almacen->codigo = $request->input('codigo');
        $almacen->id_sucursal_almacen= $request->input('id_sucursal_almacen');
        $almacen->save();

        return redirect()->route('almacen.edit', $almacen->id)
            ->with('info', 'Almacén guardado con éxito');
    }

    public function destroy($id)
    {

        $mensaje = Almacen::find($id);
        $almacen = Almacen::find($id)->delete();

        Log::info( 'Almacén eliminado: ' .$mensaje->id . ' ' . $mensaje->nombre  );
        return back()->with('info', 'Eliminado correctamente');
    }
}
