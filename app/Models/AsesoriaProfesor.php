<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsesoriaProfesor extends Model
{
    use HasFactory;
    protected $fillable = [
        'perfil_profesor_id',
        'pais_id',
        'profesion_id',
        'user_id',
        'Descripcion',  
    ];
    public function paises()
    {
        return $this->belongsTo(Pais::class, 'Pais_id','id');
    }
    public function profesiones()
    {
        return $this->belongsTo(Profesion::class, 'Profesion_id','id');
    }
    public function perfil_profesores()
    {
        return $this->belongsTo(Profesion::class, 'perfil_profesor_id','id');
    }
    public function users()
        {
            return $this->belongsTo(User::class,'user_id','id');
        }
}
