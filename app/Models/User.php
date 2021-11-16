<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'Paterno',
        'Materno',
        'Sexo',
        'Escolaridad',
        'nickname',
        'email',
        'password',
        
    ];
    public function asesoria_profesor()
        {
            return $this->hasMany(AsesoriaProfesor::class,'user_id','id');
        }
    public function asesoria_estudiante()
        {
            return $this->hasMany(AsesoriaEstudiante::class,'user_id','id');
        }
    public function perfil_profesor()
        {
            return $this->hasMany(PerfilProfesor::class,'Usuarios_id','id');
        }
        

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
