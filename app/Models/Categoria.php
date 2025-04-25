<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function productos(){
        return $this->belongsToMany(Producto::class)->withTimestamps();// Una categoría puede tener muchos productos
    }

    public function caracteristica(){
        return $this->belongsTo(Caracteristica::class);  // Una categoría puede estar asociada a una única característica.
    }

    protected $fillable = ['caracteristicas_id'];

}
