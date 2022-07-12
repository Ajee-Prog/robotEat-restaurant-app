<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipeController extends Controller
{
    //
    public function indext(){
         Recipe::all();
        // $all_product = Recipe::all();
        // return view(" product", ['products'=>$all_product]);
    }
    public function toggleStatus(Request $requst){
        $recipes = Recipe::find($requst->recipe_id);
        $recipes->status = $requst->status;
        $recipes->save();
    }
}
