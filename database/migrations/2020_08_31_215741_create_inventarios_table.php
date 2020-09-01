<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('cantidad');
            $table->boolean('estado');
            $table->string('reserva');
            $table->string('unidad_medida');
            $table->string('disponibilidad');
            //FK
            $table->unsignedBigInteger('almacen_id')->nullable;
            $table->foreign('almacen_id')->references('id')->on('almacens');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventarios');
    }
}
