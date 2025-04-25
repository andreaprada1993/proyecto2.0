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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social', 80);
            $table->string('direccion', 80);
            $table->string('tipo_personas', 25);
            $table->tinyInteger('estado')->default(1);
            /*es una relacion de 1-1 que solo exista un registro, una persona existira un solo registro */
            $table->foreignId('documento_id')->unique()->constrained('documentos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
