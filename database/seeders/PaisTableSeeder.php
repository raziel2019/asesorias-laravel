<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pais;
class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->insertPais(1,'MÉXICO');
        $this->insertPais(2,'NICARAGUA');
        $this->insertPais(3,'NIGERIA');
        $this->insertPais(4,'PARAGUAY');
        $this->insertPais(5,'RUANDA');
        $this->insertPais(6,'UZBEKISTÁN');
        $this->insertPais(7,'VIETNAM');
        $this->insertPais(8,'ZIMBABUE');
        $this->insertPais(9,'VENEZUELA');
        $this->insertPais(10,'NEPAL');
        $this->insertPais(11,'NIGERIA');
        $this->insertPais(12,'GRANADA');
        $this->insertPais(13,'RLANDA');
        $this->insertPais(14,'ISRAEL');
        $this->insertPais(15,'ITALIA');
        $this->insertPais(16,'EGIPTO');
        $this->insertPais(17,'ECUADOR');
        $this->insertPais(18,'COSTA RICA');
        $this->insertPais(19,'CROACIA');
        $this->insertPais(20,'CONGO');
        $this->insertPais(21,'CAMBOYA');
    }

    private function insertPais($id,$Descripcion){
        $Paises = new Pais();
        $Paises->id = $id;
        $Paises->Descripcion = $Descripcion;
        $Paises->save();
    }


}
