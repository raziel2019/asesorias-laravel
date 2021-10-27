<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilProfesor extends Model
{
    use HasFactory;
    protected $fillable = [
        'Email',
        'Movil',
        'Linkedin',
        'ExpeLaboral',
        'Logros',
        'FormacionAcademica',
        'Aptitudes',
        'Cursos',
        'PerfilProfesorcol',
        'Pais_id',
        'Profesion_id'
    ];
    public function pais()
    {
        return $this->hasMany(Pais::class);
    }
    public function profesion()
    {
        return $this->hasMany(Profesion::class);
    }
}
