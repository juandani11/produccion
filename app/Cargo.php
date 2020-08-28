<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table  = 'cargo';
    protected $primaryKey  = 'id_cargo';
    public $timestamps = false;

    protected $fillable = [
        'id_cargo','cod_cargo','nombre_cargo', 'descripcion'
    ];
}
