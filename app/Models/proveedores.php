<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    protected $table = 'proveedores';   // nombre de la tabla

    protected $primaryKey = 'idproveedor';  //  aquí indicas tu PK real

    public $incrementing = true;   // si tu PK es autoincremental
    protected $keyType = 'int';    // tipo de dato de tu PK

    protected $fillable = [
        'idproveedor',
        'nombre',
        'contacto',
        'direccion',
    ];
}
