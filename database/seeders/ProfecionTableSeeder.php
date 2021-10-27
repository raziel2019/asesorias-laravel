<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profesion;
class ProfecionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insertProfecion(1,'Contaduría Pública');
        $this->insertProfecion(2,'Administración de Empresas');
        $this->insertProfecion(3,'Ingeniería Industrial');
        $this->insertProfecion(4,'Diseño Gráfico');
        $this->insertProfecion(5,'Derecho');
        $this->insertProfecion(6,'Nutrición');
        $this->insertProfecion(7,'Educación Física y Ciencias del Deporte');
        $this->insertProfecion(8,'Psicología');
        $this->insertProfecion(9,'Enfermería');
        $this->insertProfecion(10,'Matematico');
    }
    private function insertProfecion($id,$Descripcion){
        $Profeciones = new Profesion();
        $Profeciones->id = $id;
        $Profeciones->Descripcion = $Descripcion;
        $Profeciones->save();
    }
}
