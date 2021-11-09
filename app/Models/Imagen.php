<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
    ];

    protected $table = 'imagenes';

    /**
    * Devuelve el modelo propietario de la imagen
    */
    public function modelo(){
        return $this->morphTo();
    }
}
