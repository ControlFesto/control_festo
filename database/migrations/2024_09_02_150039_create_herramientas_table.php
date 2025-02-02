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
    //TAbla de herramientas
    public function up()
    {
        Schema::create('herramientas', function (Blueprint $table) {
            //Campos de la tabla
            $table->id();
            $table->string('cod_herramienta')->unique();
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('stock');
            $table->string('categoria');
            $table->string('imagen');
            $table->string('imagencode');
            $table->integer('organizador');
            $table->integer('cajon');
            $table->string('estado');
            $table->string('proceso')->default('en stock');
            $table->unsignedBigInteger('solicitudes_count')->default(0);            
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
        Schema::dropIfExists('herramientas');
    }
};
