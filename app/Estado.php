<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = [
        'cve_ent',
        'nom_ent',
        'nom_abr',
        'id_pais',
        'ciudad_id',
    ];
}
