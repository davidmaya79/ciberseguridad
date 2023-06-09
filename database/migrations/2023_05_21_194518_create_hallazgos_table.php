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
        Schema::create('hallazgos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('auditoria_id');
            $table->foreign('auditoria_id')->references('id')->on('auditorias')->onDelete('cascade');
            $table->string('descripcion_hallazgo');
            $table->date('fecha_deteccion');
            $table->string('clasificacion_hallazgo');
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
        Schema::dropIfExists('hallazgos');
    }
};
