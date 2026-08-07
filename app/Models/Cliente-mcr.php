<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nombre', 'ruc_cedula', 'telefono', 'direccion', 'correo'
    ];

    public function dispositivos()
    {
        return $this->hasMany(Dispositivo::class);
    }
}