<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Historial extends Migration
{

    public function up()
    {
        Schema::create('historal', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->string('descripcion');
            $table->string('estado_anterior');
            $table->string('estado_nuevo');
            $table->string('tabla');
            $table->string('atributo');
            $table->integer('id_usuario')->unsigned();
        });
        Schema::table('historal', function($table) {
            $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historal');
    }
}
