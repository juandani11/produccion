<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedors = Proveedor::paginate();

        return view('inventario/proveedor.index', compact('proveedors'));
    }

    public function create()
    {
        return view('inventario/proveedor.create');
    }

    public function store(Request $request)
    {
        $proveedor = Proveedor::create($request->all());



        $input=$request->all();
        if ($input['src']){
            $input['src'] =$this->upload($input['src']);
        }else{
            $input['src'] = 'img/Proveedor/default.jpg';
        }



        return redirect()->route('proveedor.edit', $proveedor->id)
            ->with('info', 'Rol guardado con éxito');
    }


    public function show($id)
    {
        $proveedor = Proveedor::find($id);

        return view('inventario/proveedor.show', compact('proveedor'));
    }

    public function edit($id)
    {
        $proveedor = Proveedor::find($id);

        return view('inventario/proveedor.edit', compact('proveedor'));
    }

    public function update(Request $request, $id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->nombre = $request->input('nombre');
        $proveedor->telefono = $request->input('telefono');
        $proveedor->codigo = $request->input('codigo');

        $proveedor->save();

        return redirect()->route('proveedor.edit', $proveedor->id)
            ->with('info', 'Rol guardado con éxito');
    }

    public function destroy($id)
    {

        $mensaje = Proveedor::find($id);
        $proveedor = Proveedor::find($id)->delete();

        Log::info( 'Proveedor eliminado: ' .$mensaje->id . ' ' . $mensaje->nombre  );
        return back()->with('info', 'Eliminado correctamente');
    }



    public function upload($file){
        $name = time();
        $filename = $name;
        $current = public_path('img/proveedor/');

        return 'img/proveedor/'.$filename;
    }

}
