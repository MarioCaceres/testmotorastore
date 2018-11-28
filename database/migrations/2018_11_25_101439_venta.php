<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Venta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('canal');
            $table->date('fecha');
            $table->integer('estado');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_cliente')->unsigned();
        });
        Schema::table('venta', function($table) {
            $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');
        });
        Schema::table('venta', function($table) {
            $table->foreign('id_cliente')->references('id')->on('cliente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
}
