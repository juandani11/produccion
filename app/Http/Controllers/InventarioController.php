<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Inventario;
use App\Almacen;
use Illuminate\Support\Facades\DB;

class InventarioController extends Controller
{
    public function index()
    {
        $inventarios = DB::table('inventarios')
            ->join('almacens', 'inventarios.almacen_id', '=', 'almacens.id')
            ->select('inventarios.*', 'nombre')
            ->paginate(15);

        return view('inventario/inventario.index', compact('inventarios'));
    }
    public function create()
    {
        $almacenes = Almacen::all();
        $inventario = Inventario::first();
        return view('inventario/inventario.create', compact('almacenes'), compact('inventario'));
    }
    public function store(Request $request)
    {
        $inventario = Inventario::create($request->all());
        $almacenes = Almacen::all();

        return redirect()->route('inventario.edit', $inventario->id)
            ->with('info', 'Materia Prima guardada con éxito');
    }

    public function edit($id)
    {
        $inventario = Inventario::find($id);
        $almacenes = Almacen::all();
        return view('inventario/inventario.edit', compact('inventario'), compact('almacenes'));
    }


    public function show($id)
    {
        $inventario = Inventario::find($id);
        $almacen = Almacen::find($inventarios->almacen_id);
        return view('inventario/inventario.show', compact('inventario'), compact('almacen'));
    }

    public function update(Request $request, $id)
    {
        $inventario = Inventario::find($id);
        $inventario->cantidad = $request->input('cantidad');
        $inventario->reserva = $request->input('reserva');
        $inventario->unidad_medida = $request->input('unidad_medida');
        $inventario->disponibilidad= $request->input('disponibilidad');
        $inventario->almacen_id= $request->input('almacen_id');
        $inventario->save();

        return redirect()->route('inventario.edit', $inventario->id)
            ->with('info', 'Inventario guardado con éxito');
    }

    public function destroy($id)
    {

        $mensaje = Inventario::find($id);
        $inventario = Inventario::find($id)->delete();

        Log::info( 'Inventario eliminado: ' .$mensaje->id . ' ' . $mensaje->cantidad  );
        return back()->with('info', 'Eliminado correctamente');
    }
}
