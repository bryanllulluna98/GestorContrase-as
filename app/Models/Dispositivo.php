<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    protected $fillable = [
        'cliente_id', 'tipo', 'marca', 'modelo', 'ubicacion'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function credenciales()
    {
        return $this->hasMany(Credencial::class);
    }
}