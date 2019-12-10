<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precios', function (Blueprint $table) {
            $table->unsignedInteger('id_precio');
            $table->integer('id_curso')->unsigned();
            $table->string('precio');
            $table->string('tipo_pago');
            $table->index(['id_precio']);
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
        Schema::dropIfExists('precios');
    }
}
