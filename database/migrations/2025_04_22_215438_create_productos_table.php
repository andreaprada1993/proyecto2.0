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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 50);
            $table->string('nombre', 80);
            /* Campo de stock sin valores negativos, por defecto 0
            unsigned(): significa que no acepta números negativos, solo valores desde 0 hacia arriba.
            integer: define que el tipo de dato es entero (sin decimales).*/ 
            $table->integer('stock')->unisigned()->default(0);
            $table->string('descripcion', 255)->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->string('img_path',255)->default(1);
            /*tinyInteger: crea un número entero pequeño (usualmente entre 0 y 255).
            Estado del registro: 1 activo, 0 inactivo (por defecto activo)*/ 
            $table->tinyInteger('estado')->default(1);
            /*onDelete('cascade'):Si se borra el cliente, también se borra este registro*/
            $table->foreignId('marcas_id')->constrained('marcas')->onDelete('cascade');
            $table->foreignId('presentaciones_id')->constrained('presentaciones')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
