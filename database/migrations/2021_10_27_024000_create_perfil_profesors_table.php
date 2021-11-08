<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilProfesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_profesors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Pais_id');
            $table->unsignedBigInteger('Profesion_id');
            $table->unsignedBigInteger('Usuarios_id');
            $table->foreign('Usuarios_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('Pais_id')
            ->references('id')
            ->on('pais')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('Profesion_id')
            ->references('id')
            ->on('profesions')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Movil');
            $table->string('Linkedin');
            $table->string('ExpeLaboral');
            $table->string('Logros');
            $table->string('FormacionAcademica');
            $table->string('Aptitudes');
            $table->string('Cursos');
            $table->string('PerfilProfesorcol');
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
        Schema::dropIfExists('perfil_profesors');
    }
}
