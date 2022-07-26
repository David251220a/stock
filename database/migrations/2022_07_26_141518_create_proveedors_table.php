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
        Schema::create('com_proveedor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('documento_tipo_id');
            $table->foreignId('persona_id')->references('id')->on('sis_persona');
            $table->unsignedBigInteger('condicion_compra_id');
            $table->decimal('credito_monto_maximo', 13, 0)->default(0);
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
        Schema::dropIfExists('com_proveedor');
    }
};
