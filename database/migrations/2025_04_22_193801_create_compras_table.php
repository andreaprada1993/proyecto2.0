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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_hora');
            /*para que no acepte valores negativos colocar true*/
            $table->decimal('impuesto', 8, 2, true);
            $table->string('numero_comprobante', 255);
            $table->decimal('total', 8, 2, true);
            $table->tinyInteger('estado')->default(1);
            /*Crea una columna 'comprobante_id' como clave foránea que apunta a la tabla 'comprobantes'.*/
            /*Si el comprobante relacionado es eliminado, se establece 'comprobante_id' como nulo en esta tabla.*/
            $table->foreignId('comprobante_id')->nullable()->constrained('comprobantes')->onDelete('set null');
            $table->foreignId('proveedor_id')->nullable()->constrained('proveedores')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
