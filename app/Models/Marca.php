<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    public function productos()
    {
        return $this->hasMany(Producto::class); // Una categoría puede tener muchos productos asociados.
    }

    
    public function caracteristica(){
        return $this->belongsTo(Caracteristica::class);  // Una marca puede estar asociada a una única característica.
    }

}
