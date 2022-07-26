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
        Schema::create('exi_existencia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('articulo_id')->references('id')->on('exi_articulo');
            $table->foreignId('deposito_id')->references('id')->on('exi_deposito');
            $table->string('lote_id', 150)->nullable();
            $table->integer('existencia_actual')->default(0);
            $table->integer('existencia_minima')->default(0);
            $table->decimal('precio_compra_ml', 13, 0)->default(0);
            $table->decimal('precio_compra_me', 13, 0)->default(0);
            $table->decimal('precio_venta_ml', 13, 0)->default(0);
            $table->decimal('precio_venta_me', 13, 0)->default(0);
            $table->foreignId('usuario_alta')->references('id')->on('users');
            $table->foreignId('usuario_modificacion')->references('id')->on('users');
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
        Schema::dropIfExists('exi_existencia');
    }
};
