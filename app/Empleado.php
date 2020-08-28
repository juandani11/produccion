<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table  = 'empleado';
    protected $primaryKey  = 'id_empleado';
    public $timestamps = false;

    protected $fillable = [
        'id_empleado',
        'cod_empleado',
        'nombre_empleado',
        'cedula_empleado',
        'email_empleado',
        'direccion_empleado',
        'telefono_empleado',
        'fecha_nacimiento_empleado'
    ];
}
