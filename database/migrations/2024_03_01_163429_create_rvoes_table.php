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
        Schema::create('rvoes', function (Blueprint $table) {
            $table->id();
            $table->string('plantel');
            $table->string('materia');
            $table->string('nivel');
            $table->string('modalidad');
            $table->string('rvoe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rvoes');
    }
};
