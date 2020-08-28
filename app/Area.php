<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table  = 'area';
    protected $primaryKey  = 'id_area';
    public $timestamps = false;

    protected $fillable = [
        'id_area','cod_area','nombre_area', 'id_departamento_area'
    ];
}
