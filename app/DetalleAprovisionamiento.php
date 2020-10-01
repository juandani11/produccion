<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleAprovisionamiento extends Model
{
    protected $fillable = [
        'estado', 'cantidad', 'materia_prima_id', 'aprovisionamiento_id','articulo_id'
    ];
    public function proveedor(){
        return $this->belongsTo('App\Proveedor');
    }
}
