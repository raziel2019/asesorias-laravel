<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsesoriaProfesor extends Model
{
    use HasFactory;
    protected $fillable = [
        'Descripcion',  
    ];
    public function users()
        {
            return $this->belongsTo(User::class,'usuarios_id','id');
        }
}
