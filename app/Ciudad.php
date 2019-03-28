<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $fillable = [
        'cve_ent',
        'cve_mun',
        'nom_mun',
        'cve_cab',
        'nom_cab',
        
    ];
}
