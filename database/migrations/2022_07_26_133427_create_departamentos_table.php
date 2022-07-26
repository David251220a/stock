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
        Schema::create('sis_departamento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pais_id')->references('id')->on('sis_pais');
            $table->string('descripcion', 80);
            $table->boolean('preferido')->default(false);
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
        Schema::dropIfExists('sis_departamento');
    }
};
