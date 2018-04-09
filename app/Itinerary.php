<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    protected $table = 'itinerary';
    protected $fillable = [
    	'tour_id',
    	'name'
    ];
}
