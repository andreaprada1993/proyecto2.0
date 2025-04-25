<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Caracteristica extends Model
{
    use HasFactory;

    public function categoria(){
        return $this->hasOne(Categoria::class);// Una característica puede estar asociada a una única categoría.
    }

    public function marca(){
        return $this->hasOne(Categoria::class); // Una característica puede estar asociada a una única marca.
    }

    public function presentacione(){
        return $this->hasOne(Categoria::class); // Una característica puede estar asociada a una única presentación.
    }

    protected $fillable = ['nombre','descripcion']; // llena el nombre yla descripcion
    
}
