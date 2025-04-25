<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //La relación belongsToMany en Laravel se utiliza cuando una tabla está relacionada con otra de forma muchos a muchos. 
    use HasFactory;

    public function compras(){
        return $this->belongsToMany(Compra::class)->withTimestamps()->withPivot('cantidad','precio_compra','precio_venta');// Un producto puede estar asociado a muchas compras
    }

    // Un producto puede estar asociado a muchas ventas, y se guarda la fecha de creación y actualización de la relación en la tabla pivote.
    // Además, se incluye información adicional en la tabla pivote: cantidad, precio de venta y descuento aplicado.
    public function ventas(){
        return $this->belongsToMany(Venta::class)->withTimestamps()->withPivot('cantidad','precio_venta','descuento');
    }

    public function categorias(){
        return $this->belongsToMany(Categoria::class)->withTimestamps();// Un producto puede estar asociado a muchas categorías, y se guarda la fecha de creación y actualización de la relación en la tabla pivote.
    }

    public function marca(){
        return $this->belongsTo(Marca::class); // Un producto pertenece a una marca.
    }

    public function presentaciones(){
        return $this->belongsTo(Presentacione::class);// Un producto pertenece a una presentación específica. 
    }


}
