<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table  = 'departamento';
    protected $primaryKey  = 'id_departamento';
    public $timestamps = false;

    protected $fillable = [
        'id_departamento','cod_departamento','nombre_departamento', 'id_sucursal_departamento'
    ];

}
