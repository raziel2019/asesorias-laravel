<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsesoriaProfesor extends Model
{
    use HasFactory;
    protected $fillable = [
        'perfil_profesor_id',
        'user_id',
        'Descripcion',
        'FechaAsesoria',
        'Estatus',  
    ];

    public function profesores()
    {
        return $this->belongsTo(PerfilProfesor::class, 'perfil_profesor_id','id');
    }
    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
