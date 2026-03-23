<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;//opcional, pero recomendable para crear datos de prueba
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios'; // Especifica el nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre',
        'apaterno',
        'amaterno',
        'email',
        'password',
        'telefono',
        'activo'
    ];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'usuario_rol', 'usuario_id', 'rol_id');
    }
}