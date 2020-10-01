<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleAprovisionamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_aprovisionamientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->integer('cantidad')->nullable();
            $table->boolean('estado')->default('1');

            //FK articulo
            $table->BigInteger('articulo_id')->nullable()->unsigned();
            $table->foreign('articulo_id')->references('id')->on('articulos');

            //FK materia prima
            $table->unsignedBigInteger('materia_prima_id')->nullable();
            $table->foreign('materia_prima_id')->references('id')->on('materia_primas');

            //FK aprovisionamiento
            $table->unsignedBigInteger('aprovisionamiento_id')->nullable;
            $table->foreign('aprovisionamiento_id')->references('id')->on('orden_aprovisionamientos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_aprovisionamientos');
    }
}
