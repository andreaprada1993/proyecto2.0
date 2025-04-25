<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //relacion a la inversa persona a documento
    use HasFactory;
    public function documento()
    {
       //el modelo que usa belongsTo contiene la clave foránea que apunta a la otra tabla.
        return $this->belongsTo(Documento::class);// Una persona puede tener varios documentos
    }

    public function proveedore(){
        return $this->hasOne(proveedore::class);// Una persona tiene un solo proveedor
    }

    public function cliente(){
        return $this->hasOne(Cliente::class);// Una persona tiene un solo cliente
    }

}
