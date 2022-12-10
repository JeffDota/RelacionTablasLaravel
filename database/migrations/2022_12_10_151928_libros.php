<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->engine="InnoDB";//borado en cascada
            $table->bigIncrements('id');
            $table->bigInteger('categoria_id')->unsigned(); //campo para la relacion entre tablas
            $table->string('nombre');
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete("cascade");
            // relacion tablaes  campo      referencia con id  que esta en la tabla categorias y boraa en cascada
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
