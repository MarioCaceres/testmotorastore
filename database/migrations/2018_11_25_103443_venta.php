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
            $table->integer('id_detalle_venta')->unsigned();
            $table->integer('id_usuario')->unsigned();
  
        });
        Schema::table('venta', function($table) {
        $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');
        });
        Schema::table('venta', function($table) {
        $table->foreign('id_detalle_venta')->references('id')->on('detalle_venta')->onDelete('cascade');
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
