<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioRol extends Model
{
    protected $table = 'usuario_rol'; // Especifica el nombre de la tabla en la base de datos

    protected $fillable = [
        'usuario_id',//clave foránea que hace referencia a la tabla usuarios
        'rol_id',
    ];  

    public $timestamps = false; // Si no tienes campos de marca de tiempo en la tabla pivot
}
