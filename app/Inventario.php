<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $fillable = [
        'cantidad', 'estado', 'reserva', 'unidad_medida' , 'disponibilidad', 'almacen_id'
    ];
    
}
