<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentacione extends Model
{
    use HasFactory;
    protected $table = 'presentaciones';
    



    public function productos(){
        return $this->belongsToMany(Producto::class); // Una presentación puede estar asociada a muchos productos y viceversa (relación muchos a muchos).

    }

    
    public function caracteristica(){
        return $this->belongsTo(Caracteristica::class);  // Una presentaciones puede estar asociada a una única característica.
    }


}
