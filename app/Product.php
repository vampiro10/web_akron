<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nombre',
        'img',
        'viscosidad',
        'presentacion',
        'precio',
        'description',
        'beneficios',
        'aplicaciones',
        'uso',
    ];
}
