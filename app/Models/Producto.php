<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Producto extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'categoria_id', // <- asegúrate que esté
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
