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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('Codigo');
            $table->integer('Edicion');
            $table->date('Fecha_validez');
            $table->longText('reservado_gerencia');
            $table->date('fecha');
            $table->string('Ubicacion_equipo');
            $table->integer('tipo_movimiento');
            $table->string('descripcion_equipo');
            $table->string('marca');
            $table->string('modelo');
            $table->string('serie');
            $table->boolean('Nuevo');
            $table->boolean('usado_buen_estado');
            $table->boolean('danado');
            $table->longText('Diagnostico_u_observaciones');
            $table->date('movimiento_desde');
            $table->date('movimiento_hasta');
            $table->boolean('movimiento_indefinido');
            $table->string('persona_que_entrega');
            $table->boolean('entregado_firma');
            $table->string('persona_que_recibe');
            $table->boolean('recibido_firma');
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
        Schema::dropIfExists('registros');
    }
};
