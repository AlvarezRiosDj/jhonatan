<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
    	'categorie_id',
    	'meta_description',    
    	'meta_keywords',
    	'name',
    	'slug',
        'img',
    	'description_short',
    	'description_complete',
    	'cant_person',
    	'characteristics',
    	'latitud',
        'longitud',
    	'status',
    	'price',
        'slider',
    	'offer',
    	'start_offer',
    	'end_offert',
    	'cod_offer'
    ];
}
