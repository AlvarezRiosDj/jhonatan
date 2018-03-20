<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
    	'categorie_id',
    	'meta_description',
    	'country_id',
    	'meta_keywords',
    	'name',
    	'slug',
    	'description_short',
    	'description_complete',
    	'cant_person',
    	'characteristics',
    	'map',
    	'status',
    	'price',
    	'offer',
    	'start_offer',
    	'end_offert',
    	'cod_offer'
    ];
}
