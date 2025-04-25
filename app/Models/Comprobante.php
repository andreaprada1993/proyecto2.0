<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    use HasFactory;

    public function compras()
    {
        return $this->hasMany(compra::class);// Un comprobante puede estar relacionado con muchas compras
    }

    public function ventas(){
        return $this->hasMany(Venta::class);// Un usuario puede tener muchas ventas asociadas
    }

    public function comprobante(){
        return $this->belongsTo(Comprobante::class);// Una venta pertenece a un comprobante
    }


}
