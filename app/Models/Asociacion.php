<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asociacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    protected $table = 'asociaciones';

    public function imagenes(){
        return $this->morphMany(Imagen::class, 'modelo');
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
