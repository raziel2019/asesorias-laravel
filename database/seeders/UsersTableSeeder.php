<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
   
    public function run()
    {
          $admin = User::create([
            'id' => 1,
            'name' => 'Administrador',
            'Paterno' => 'Lopez',
            'Materno' => 'Gonzalez',
            'Sexo' => 'Hombre',
            'email' => 'admin@asesoria.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'Escolaridad' => 'Licenciatura',
            'nickname' => 'Administrador',
            'created_at' => now(),
            'updated_at' => now()
            
        
        ]);
        $prof = User::create([
            'id' => 2,
            'name' => 'Profesor',
            'Paterno' => 'Rodriguez',
            'Materno' => 'Gonzalez',
            'Sexo' => 'Hombre',
            'email' => 'profesor@asesoria.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'Escolaridad' => 'Licenciatura',
            'nickname' => 'Profesor',
            'created_at' => now(),
            'updated_at' => now()
            
        
        ]);
        $usua = User::create([
            'id' => 3,
            'name' => 'Usuario',
            'Paterno' => 'Uh',
            'Materno' => 'Balam',
            'Sexo' => 'Hombre',
            'email' => 'usuario@asesoria.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'Escolaridad' => 'Bachillerato',
            'nickname' => 'Usuario',
            'created_at' => now(),
            'updated_at' => now()
            
        
        ]);
        $admin->assignRole('Administrador');
        $prof->assignRole('Profesor');
        $usua->assignRole('Usuario');
    }
}
