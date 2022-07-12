<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    //
    //protected $table = " recipes";
    protected $fillable = [
        'food_title', 'food_image', 'food_description', 'food_staus'
    ];
}
