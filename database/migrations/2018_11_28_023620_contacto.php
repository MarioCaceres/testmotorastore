<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contacto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_producto')->unsigned();
            $table->integer('id_proveedor')->unsigned();
        });
        Schema::table('contacto', function($table) {
            $table->foreign('id_producto')->references('id')->on('producto')->onDelete('cascade');
        });
        Schema::table('contacto', function($table) {
            $table->foreign('id_proveedor')->references('id')->on('proveedor')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacto');
    }
}
