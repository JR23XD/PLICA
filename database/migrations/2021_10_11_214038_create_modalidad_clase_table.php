<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModalidadClaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalidad_clase', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('modalidad_id')->comment('Foreign Key');
            $table->unsignedBigInteger('clase_id')->comment('Foreign Key');
            $table->foreign('modalidad_id')->references('id')->on('modalidads')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign('clase_id')->references('id')->on('clases')->onUpdate('restrict')->onDelete('cascade');
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
        Schema::dropIfExists('modalidad_clase');
    }
}
