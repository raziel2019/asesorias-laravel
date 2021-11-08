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
        'Profesion_id',
        'Usuarios_id'
    ];
    public function paises()
    {
        return $this->belongsTo(Pais::class, 'Pais_id','id');
    }
    public function profesiones()
    {
        return $this->belongsTo(Profesion::class, 'Profesion_id','id');
    }
    public function users()
        {
            return $this->belongsTo(User::class,'Usuarios_id','id');
        }
}
