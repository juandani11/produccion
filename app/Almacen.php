<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected $fillable = [
        'codigo', 'descripcion', 'estado', 'nombre', 'id_sucursal_almacen'
    ];
    
}
