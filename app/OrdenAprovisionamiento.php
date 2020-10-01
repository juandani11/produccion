<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenAprovisionamiento extends Model
{
    protected $fillable = [
        'observacion', 'fecha', 'hora','codigo', 'estado', 'empleado_id'
    ];
    public function empleado(){
        return $this->belongsTo('App\Empleado');
    }

}
