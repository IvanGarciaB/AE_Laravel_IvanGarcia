<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto_IG extends Model
{
    protected $table = '_productos_i_g';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
    ];
}

