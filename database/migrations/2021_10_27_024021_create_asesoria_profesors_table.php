<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsesoriaProfesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesoria_profesors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perfil_profesor_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('Descripcion');
            $table->string('NombreEstudiante')->nullable();
            $table->string('FechaAsesoria')->nullable();
            $table->string('Estatus');
            $table->string('Link')->nullable();
            $table->foreign('perfil_profesor_id')
            ->references('id')
            ->on('perfil_profesors')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asesoria_profesors');
    }
}
