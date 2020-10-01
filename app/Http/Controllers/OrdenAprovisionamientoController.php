<?php

namespace App\Http\Controllers;

use App\Articulo;
use App\DetalleAprovisionamiento;
use App\MateriaPrima;
use App\OrdenAprovisionamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdenAprovisionamientoController extends Controller
{
    public function index()
    {

        $aprovisionamientos = OrdenAprovisionamiento::paginate();
        return view('compra/orden_aprovisionamiento.index', compact('aprovisionamientos'));
    }


    public function create()
    {
        $materia_primas = MateriaPrima::all();
        $articulos = DB::table('articulos as ar')
            ->select(DB::raw('CONCAT(ar.codigo," ",ar.nombre) as articulo'),'ar.id')
            ->where('ar.estado','=','1')
            ->get();
        $aprovisionamientos = OrdenAprovisionamiento::first();
        $detalles= DB::table('detalle_aprovisionamientos as d')
            //Unir detale con la tabla articulo
            ->join('articulos as a', 'a.id', '=', 'd.articulo_id')
            ->select('a.nombre', 'd.cantidad', 'd.articulo_id')
            ->get();
        return view('compra/orden_aprovisionamiento.create', compact('aprovisionamientos','detalles')
            , compact('articulos','materia_primas'));
    }

    public function store(Request $request)
    {
        $aprovisionamientos = OrdenAprovisionamiento::create($request->all());
        $cantidad= $request->get('cantidad');
        $cantidad2= $request->get('cantidad2');
        $id_articulo= $request->get('id_articulo');
        $id_materia_prima= $request->get('id_materia');
        $cont = 0;
        if (empty($id_articulo)){
            $art = 0;
        }else{
            $art = count($id_articulo);
        }
        if (empty($id_materia_prima)){
            $mat = 0;
        }else{
            $mat = count($id_materia_prima);
        }
        while ($cont < ($art)){
            $detalle =  new DetalleAprovisionamiento();
            $detalle->aprovisionamiento_id= $aprovisionamientos->id;
            if ( ! isset($id_articulo[$cont])) {
                $id_articulo[$cont] = null;
            }
            if ( ! isset($id_materia_prima[$cont])) {
                $id_materia_prima[$cont] = null;
            }
            if ( ! isset($cantidad2[$cont])) {
                $cantidad2[$cont] = null;
            }
                $detalle->cantidad=$cantidad[$cont];
                $detalle->articulo_id = $id_articulo[$cont];
            $detalle->save();
            $cont++;
        }
        $cont=0;
        while ($cont < ($mat)){
            $detalle =  new DetalleAprovisionamiento();
            $detalle->aprovisionamiento_id= $aprovisionamientos->id;
            if ( ! isset($id_articulo[$cont])) {
                $id_articulo[$cont] = null;
            }
            if ( ! isset($id_materia_prima[$cont])) {
                $id_materia_prima[$cont] = null;
            }
            if ( ! isset($cantidad2[$cont])) {
                $cantidad2[$cont] = null;
            }
            $detalle->cantidad=$cantidad2[$cont];
            $detalle->materia_prima_id = $id_materia_prima[$cont];
            $detalle->save();
            $cont++;
        }

        return redirect()->route('orden_aprovisionamiento.edit', $aprovisionamientos->id)
            ->with('info', 'Materia Prima guardada con éxito');
    }


    public function edit($id)
    {
        $aprovisionamiento = OrdenAprovisionamiento::find($id);
        $articulos = DB::table('articulos as ar')
            ->select(DB::raw('CONCAT(ar.codigo," ",ar.nombre) as articulo'),'ar.id')
            ->where('ar.estado','=','1')
            ->get();
        $materia_primas = MateriaPrima::all();
        $detalles= DB::table('detalle_aprovisionamientos as d')
            //Unir detale con la tabla articulo
            ->join('articulos as a', 'a.id', '=', 'd.articulo_id')
            ->select('a.nombre', 'd.cantidad', 'd.articulo_id')
            ->where('d.aprovisionamiento_id', '=', $id)
            ->get();
        return view('compra/orden_aprovisionamiento.edit', compact('aprovisionamiento','materia_primas'), compact('detalles','articulos'));
    }

}
