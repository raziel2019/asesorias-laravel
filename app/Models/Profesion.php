<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesion extends Model
{
    use HasFactory;
    protected $fillable = [
        'Descripcion',
        
    ];
    public function perfil_profesor()
        {
            return $this->hasMany(PerfilProfesor::class,'Usuarios_id','id');
        }
}
