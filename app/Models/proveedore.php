<?php

namespace App\Models;

use Ilumminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedore extends Model
{
    use HasFactoriy;

    public function persona()
    {
        //el modelo que usa belongsTo contiene la clave foránea que apunta a la otra tabla.
        return $this->belongsTo(Persona::class);// Un proveedor puede tener varias personas asociadas
    }

    public function compras(){
        return $this->hasMany(Compra::class);// Un proveedor puede tener muchas compras
    }
}
