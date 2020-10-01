<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_compras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->integer('cantidad');
            $table->boolean('estado')->default('1');

            //FK materia prima
            $table->unsignedBigInteger('materia_prima_id')->nullable;
            $table->foreign('materia_prima_id')->references('id')->on('materia_primas');

            //FK compra
            $table->unsignedBigInteger('compra_id')->nullable;
            $table->foreign('compra_id')->references('id')->on('orden_compras');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_compras');
    }
}
