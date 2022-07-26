<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_persona', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('documento_tipo_id');
            $table->string('documento_nro', 12);
            $table->string('apellido', 80);
            $table->string('nombre', 80);
            $table->unsignedBigInteger('estado_civil_id');
            $table->foreignId('departamento_id')->references('id')->on('sis_departamento');
            $table->foreignId('ciudad_id')->references('id')->on('sis_ciudad');
            $table->unsignedBigInteger('barrio_id');
            $table->string('direccion', 200);
            $table->string('telefono_particular', 12)->nullable();
            $table->string('telefono_movil_1', 12)->nullable();
            $table->string('telefono_movil_2', 12)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('direccion_laboral', 200)->nullable();
            $table->string('telefono_laboral', 12)->nullable();
            $table->string('email_laboral', 200)->nullable();
            $table->foreignId('estado_id')->references('id')->on('sis_estado');
            $table->foreignId('usuario_alta')->references('id')->on('users');
            $table->foreignId('usuario_modificacion')->references('id')->on('users');
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
        Schema::dropIfExists('sis_persona');
    }
};
