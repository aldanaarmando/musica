<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->unsignedInteger('id_horario');
            $table->integer('id_aula')->unsigned();
            $table->integer('id_curso')->unsigned();
            $table->string('dias');
            $table->string('horario');
            $table->index(['id_horario']);
            $table->foreign('id_aula')->references('id_aula')->on('aulas');
            $table->foreign('id_curso')->references('id_curso')->on('cursos');
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
        Schema::dropIfExists('horarios');
    }
}
