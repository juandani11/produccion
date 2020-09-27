<?php

namespace App\Http\Controllers;

use App\MateriaPrima;
use App\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MateriaPrimaController extends Controller
{
    public function index()
    {
        $materia_primas = MateriaPrima::paginate();

        return view('inventario/materia_prima.index', compact('materia_primas'));
    }
    public function create()
    {
        $proveedors = Proveedor::all();
        $materia_prima = MateriaPrima::first();
        return view('inventario/materia_prima.create', compact('proveedors'), compact('materia_prima'));
    }
    public function store(Request $request)
    {
        $materia_prima = MateriaPrima::create($request->all());
        $proveedors = Proveedor::all();

        return redirect()->route('materia_prima.edit', $materia_prima->id)
            ->with('info', 'Materia Prima guardada con éxito');
    }

    public function edit($id)
    {
        $materia_prima = MateriaPrima::find($id);
        $proveedors = Proveedor::all();
        return view('inventario/materia_prima.edit', compact('materia_prima'), compact('proveedors'));
    }


    public function show($id)
    {
        $materia_prima = MateriaPrima::find($id);
        $proveedors = Proveedor::all();
        return view('inventario/materia_prima.show', compact('materia_prima'), compact('proveedors'));
    }

    public function update(Request $request, $id)
    {
        $materia_prima = MateriaPrima::find($id);
        $materia_prima->nombre = $request->input('nombre');
        $materia_prima->precio = $request->input('precio');
        $materia_prima->codigo = $request->input('codigo');
        $materia_prima->proveedor_id= $request->input('proveedor_id');
        $materia_prima->save();

        return redirect()->route('materia_prima.edit', $materia_prima->id)
            ->with('info', 'Materia prima guardada con éxito');
    }

    public function destroy($id)
    {

        $mensaje = MateriaPrima::find($id);
        $materia_prima = MateriaPrima::find($id)->delete();

        Log::info( 'Materia prima eliminado: ' .$mensaje->id . ' ' . $mensaje->nombre  );
        return back()->with('info', 'Eliminado correctamente');
    }


}
