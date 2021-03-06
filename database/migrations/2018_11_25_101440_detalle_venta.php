<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_venta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->timestamps();
            $table->integer('id_producto')->unsigned();
            $table->integer('id_venta')->unsigned();

        });
        Schema::table('detalle_venta', function($table) {
            $table->foreign('id_producto')->references('id')->on('producto')->onDelete('cascade');
        });
        Schema::table('detalle_venta', function($table) {
            $table->foreign('id_venta')->references('id')->on('venta')->onDelete('cascade');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_venta');
    }
}
