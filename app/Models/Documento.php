<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    //es el metodo principal y relacionar documento con persona
    use HasFactory;
    public function persona(){
         //hasOne es un tipo de relación entre tablas que establece que un registro de una tabla está asociado con un solo registro de otra tabla.
        return $this->hasOne(Persona::class);// Un documento tiene una persona asociada
    }

}
