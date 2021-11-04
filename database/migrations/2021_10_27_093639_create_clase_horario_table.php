<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaseHorarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clase_horario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clase_id')->comment('Foreign Key');
            $table->unsignedBigInteger('horario_id')->comment('Foreign Key');
            $table->foreign('clase_id')->references('id')->on('clases')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign('horario_id')->references('id')->on('horarios')->onUpdate('restrict')->onDelete('cascade');
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
        Schema::dropIfExists('clase_horario');
    }
}
