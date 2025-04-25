<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    public function cliente(){
        return $this->belongsTo(Cliente::class);// Una venta pertenece a un cliente
    }

    public function user(){
        return $this->belongsTo(User::class);// Una venta pertenece a un usuario que la registró
    }

}
