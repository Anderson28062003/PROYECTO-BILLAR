<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class patrocinadores extends Model
{
    protected $table = 'patrocinadores';
    
    protected $fillable = [
        'idpatrocinador',
        'nombre',
        'logo',
        'empresa',
        'contacto',
    ];
}
