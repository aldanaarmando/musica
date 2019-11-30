<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->increments('id_inscripcion');
            $table->integer('id_curso')->unsigned();
            $table->integer('id_alumno')->unsigned();
            $table->foreign('id_curso')->references('id_curso')->on('cursos');
            $table->foreign('id_alumno')->references('id_alumno')->on('alumnos');
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
        Schema::dropIfExists('inscripcions');
    }
}
