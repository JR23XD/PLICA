<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->bigIncrements('id');

            $table->string('img_per_rut', 200)->nullable()->comment('Ruta de donde se guardo la imagen');
            $table->string('img_per', 200)->nullable()->comment('Nombre de la imagen');
            $table->string('tip')->nullable()->comment('Tipo de acceso');
            $table->string('name')->comment('Nombre');
            $table->string('apes')->nullable()->comment('Apellidos');
            $table->string('mod')->nullable()->comment('Modalidad');
            $table->string('call')->nullable()->comment('Calle');
            $table->string('num_int')->nullable()->comment('Número Interior');
            $table->string('num_ext')->nullable()->comment('Número Exterior');
            $table->string('col')->nullable()->comment('Colonia');
            $table->string('cp')->nullable()->comment('Código postal');
            $table->string('mun')->nullable()->comment('Municipio');
            $table->string('est')->nullable()->comment('Estado');
            $table->string('email')->unique()->comment('Correo');
            $table->string('telf')->nullable()->comment('Teléfono Fijo');
            $table->string('telm')->nullable()->comment('Teléfono Celular');
            $table->text('obs')->nullable()->comment('Observaciones');
            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();

            $table->string('created_at_reg')->nullable()->comment('Correo del usuario que realizo el registro');
            $table->string('updated_at_reg')->nullable()->comment('Correo del usuario que realizo la última modificación');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
