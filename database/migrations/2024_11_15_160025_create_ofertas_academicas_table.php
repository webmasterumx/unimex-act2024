<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ofertas_academicas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo');
            $table->foreign('id_tipo')->references('id')->on('tipo_ofertas');
            $table->string("slug", 100);
            $table->string("abreviatura", 100);
            $table->text("portada");
            $table->string("nombre", 250);
            $table->text("objetivo");
            $table->text("campo_laboral");
            $table->json("extras");
            $table->boolean("veracruz");
            $table->boolean("disponibilidad");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ofertas_academicas');
    }
};
