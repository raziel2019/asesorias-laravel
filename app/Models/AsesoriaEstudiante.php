<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsesoriaEstudiante extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'Descripcion',
        'FechaAsesoria',
        'Estatus',
        'Link',  
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}