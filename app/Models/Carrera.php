<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carreras';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function materias()
    {
        return $this->hasMany(Materia::class);//de uno a muchos
    }

    public function grupos()
    {
        return $this->hasMany(Grupo::class);
    }
}