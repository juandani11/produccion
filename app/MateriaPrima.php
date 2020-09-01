<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriaPrima extends Model
{
    protected $fillable = [
        'nombre', 'codigo', 'precio', 'estado', 'proveedor_id'
    ];
    public function proveedor(){
        return $this->belongsTo('App\Proveedor');
    }
}
