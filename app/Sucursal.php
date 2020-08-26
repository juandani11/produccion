<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table  = 'sucursal';
    protected $primaryKey  = 'id_sucursal';
    public $timestamps = false;
    //
    protected $fillable = [
        'id_sucursal','codigo','nombre_sucursal', 'descripcion', 'direccion'
    ];
}
