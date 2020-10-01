<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_compras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('observacion');
            $table->boolean('estado')->default('1');
            $table->date('Fecha');
            $table->string('hora');
            $table->string('codigo');


            //FK empleado
            $table->unsignedBigInteger('empleado_id')->nullable;
            $table->foreign('empleado_id')->references('id_empleado')->on('empleado');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden_compras');
    }
}