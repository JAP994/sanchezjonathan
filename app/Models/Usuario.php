<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_usuario',
        'nombre_completo',
        'email',
        'telefono',
        'edad',
        'fecha_nacimiento',
    ];
    public function rols()
    {
        return $this->belongsToMany(Rol::class);

        
    }
    public function configuracion()
    {
        return $this->hasOne(Configuracion::class);
    }
}
