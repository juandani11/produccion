<?php

namespace App\Http\Controllers;

use App\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos = Articulo::paginate();

        return view('inventario/articulo.index', compact('articulos'));
    }

    public function create()
    {
        return view('inventario/articulo.create');
    }

    public function store(Request $request)
    {
        $articulo = Articulo::create($request->all());

        return redirect()->route('articulo.edit', $articulo->id)
            ->with('info', 'Articulo guardado con éxito');
    }


    public function show($id)
    {
        $articulo = Articulo::find($id);

        return view('inventario/articulo.show', compact('articulo'));
    }

    public function edit($id)
    {
        $articulo = Articulo::find($id);

        return view('inventario/articulo.edit', compact('articulo'));
    }

    public function update(Request $request, $id)
    {
        $articulo = Articulo::find($id);
        $articulo->nombre = $request->input('nombre');
        $articulo->precio_venta = $request->input('precio_venta');
        $articulo->codigo = $request->input('codigo');

        $articulo->save();

        return redirect()->route('articulo.edit', $articulo->id)
            ->with('info', 'Articulo guardado con éxito');
    }

    public function destroy($id)
    {

        $mensaje = Articulo::find($id);
        $articulo = Articulo::find($id)->delete();

        Log::info( 'Articulo eliminado: ' .$mensaje->id . ' ' . $mensaje->nombre  );
        return back()->with('info', 'Eliminado correctamente');
    }




}
