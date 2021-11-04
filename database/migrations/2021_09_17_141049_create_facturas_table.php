<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->string('fdf')->comment('fecha de facturacion');
            $table->string('nrs')->comment('nombre o razon s.');
            $table->string('telf')->comment('telefono fijo');
            $table->string('telc')->comment('telefono celular');
            $table->string('cal')->comment('calle');
            $table->string('noi')->comment('no. interior');
            $table->string('noe')->comment('no.exterior');
            $table->string('col')->comment('colonia');
            $table->string('cp')->comment('código postal');
            $table->string('mun')->comment('municipio');
            $table->string('esta')->comment('estado');
            $table->string('cfdi')->comment('uso de CFDI');
            $table->string('conce')->comment('concepto');
            $table->string('comen')->comment('comentarios');
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
        Schema::dropIfExists('facturas');
    }
}
