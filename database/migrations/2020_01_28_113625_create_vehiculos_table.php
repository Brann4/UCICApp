<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('empresa');
            $table->string('marca');
            $table->string('modelo');
            $table->string('codigo_vehiculo');
            $table->string('numero_chasis');
            $table->bigInteger('anio');
            $table->string('codigo_motor');
            $table->decimal('precio',8,2);
            $table->string('fotos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
