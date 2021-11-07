<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'medidas',
        'precio',
        'stock',
        'colores',
        'user_id'
    ];

    protected $table = 'productos';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
