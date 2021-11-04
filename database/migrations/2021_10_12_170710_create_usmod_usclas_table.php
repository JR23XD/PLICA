<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsmodUsclasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usermodalidad_userclase', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usermodalidad_id')->comment('Foreign Key');
            $table->unsignedBigInteger('userclase_id')->comment('Foreign Key');
            $table->foreign('usermodalidad_id')->references('id')->on('user_modalidad')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign('userclase_id')->references('id')->on('user_clase')->onUpdate('restrict')->onDelete('cascade');
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
        Schema::dropIfExists('usermodalidad_userclase');
    }
}
