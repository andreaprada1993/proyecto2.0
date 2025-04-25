<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    public function proveedore(){
        return $this->belonhsTo(Proveedore::class);// Una persona pertenece a un proveedor
    }

    public function comprobante()
    {
        return $this->belongsTo(Comprobante::class);// Una compra pertenece a un comprobante
    }

    // Un comprobante puede estar asociado a muchos productos, y se guarda la fecha de creación y actualización de la relación en la tabla pivote.
    // Además, se incluye información adicional en la tabla pivote: cantidad, precio de compra y precio de venta.
    public function productos(){
        //// Imprime >withPivot
        return $this->belongsToMany(Producto::class)->withTimestamps()->withPivot('cantidad','precio_compra','precio_venta');
    }

}
