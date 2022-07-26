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
        Schema::create('exi_existencia_movimiento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('articulo_id')->references('id')->on('exi_articulo');
            $table->foreignId('deposito_id')->references('id')->on('exi_deposito');
            $table->string('lote_id', 150)->nullable();
            $table->date('fecha')->nullable();
            $table->unsignedBigInteger('tipo_id');
            $table->unsignedBigInteger('motivo_id');
            $table->unsignedBigInteger('comprobante_tipo_id');
            $table->string('comprobante_nro', 20);
            $table->integer('existencia_actual')->default(0);
            $table->integer('cantidad')->default(0);
            $table->integer('existencia_anterior')->default(0);
            $table->decimal('monto_ml', 13, 0)->default(0);
            $table->decimal('monto_me', 13, 0)->default(0);
            $table->decimal('tasa_cambio', 13, 0)->default(0);
            $table->foreignId('estado_id')->references('id')->on('sis_estado');
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
        Schema::dropIfExists('exi_existencia_movimiento');
    }
};
