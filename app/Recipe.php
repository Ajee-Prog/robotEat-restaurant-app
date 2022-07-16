<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
    //
    //protected $table = " recipes";
    protected $fillable = [
        'food_title', 'food_image', 'food_description', 'food_staus'
    ];
}
