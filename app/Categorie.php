<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
    	'language_id',
    	'name',
    	'img',
    	'categorie_principal',
    	'description'
    ];
}
