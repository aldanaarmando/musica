<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesors', function (Blueprint $table) {
            $table->unsignedInteger('id_profesor');
            $table->string('ci');
            $table->string('nombre');
            $table->string('apellido_pat');
            $table->string('apellido_mat');
            $table->string('fecha_nac');
            $table->string('genero');
            $table->integer('telefono');
            $table->integer('id_cargo')->unsigned();
            $table->index(['id_profesor']);
            $table->foreign('id_cargo')->references('id_cargo')->on('cargos');
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
        Schema::dropIfExists('profesors');
    }
}
