<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use DB;

class RecipeController extends Controller
{
    //
    public function indext(){
         //Recipe::all();
        // $all_product = Recipe::all();
        // return view(" product", ['products'=>$all_product]);
         $btn_color = 'card-link btn btn-primary';
         $btn_icon_up = '<i class="bi bi-hand-thumbs-down-fill"></i>';
         $btn_icon_down = '<i class="bi bi-hand-thumbs-down-fill"></i>';
        // $users = User::all();

        //return view('admin.users.index', compact('users', 'page_title', 'page_icon'));
        // $recipes = new Recipe::all();
        $recipes = new App\Recipe;
        $recipes = Recipe::all();
     return view('welcome', compact('recipes', 'btn_color', 'btn_icon_up', 'btn_icon_down'));
    }
    public function toggleStatus(Request $requst){
        $recipes = Recipe::find($requst->recipe_id);
        $recipes->food_status = $requst->status;
        $recipes->save();
    }
    public function toggleStatuss(){
        $btn_full = 'card-link btn btn-primary toggle-class" data-onstyle=\"primary\" data-offstyle=\"danger\" data-toggle=\"toggle\" data-on=\"Active\" data-off=\"InActive\" ><i class=\"bi bi-hand-thumbs-up-fill\"></i></button>';
        $btn_full_danger = '"card-link btn btn-danger toggle-class"  data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" >';
        $btn_color = 'card-link btn btn-primary';
         $btn_icon_up = 'bi bi-hand-thumbs-up-fill';
         $btn_icon_down = ' bi bi-hand-thumbs-down-fill';
        return view('toggle', compact('btn_full', 'btn_full', 'btn_full_danger', 'btn_icon_up', 'btn_icon_down', 'btn_color', 'btn_full_danger'));
    }
    public function about() {
        $recipes = Recipe::all();
        $recipes = [$recipes];
        //$recipes = new Recipe;
        $recipes=$recipes;
        $btn_full = 'card-link btn btn-primary toggle-class" data-onstyle=\"primary\" data-offstyle=\"danger\" data-toggle=\"toggle\" data-on=\"Active\" data-off=\"InActive\" ><i class=\"bi bi-hand-thumbs-up-fill\"></i></button>';
        $btn_full_danger = '"card-link btn btn-danger toggle-class"  data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" >';
        $btn_color = 'card-link btn btn-primary';
         $btn_icon_up = 'bi bi-hand-thumbs-up-fill';
         $btn_icon_down = ' bi bi-hand-thumbs-down-fill';


        return view('about', compact('recipes','btn_full', 'btn_full', 'btn_full_danger', 'btn_icon_up', 'btn_icon_down', 'btn_color', 'btn_full_danger'));
    }
    public function contact() {
        $btn_full = 'card-link btn btn-primary toggle-class" data-onstyle=\"primary\" data-offstyle=\"danger\" data-toggle=\"toggle\" data-on=\"Active\" data-off=\"InActive\" ><i class=\"bi bi-hand-thumbs-up-fill\"></i></button>';
        $btn_full_danger = '"card-link btn btn-danger toggle-class"  data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" >';
        $btn_color = 'card-link btn btn-primary';
         $btn_icon_up = 'bi bi-hand-thumbs-up-fill';
         $btn_icon_down = ' bi bi-hand-thumbs-down-fill';


        return view('contact', compact('btn_full', 'btn_full', 'btn_full_danger', 'btn_icon_up', 'btn_icon_down', 'btn_color', 'btn_full_danger'));
    }

    public function liketoggle($id){
        $recipe = Recipe::find($id);
        $recipe->food_staus = 1;
        $recipe->save();
        return redirect()->back();
            //return $id;
    }
    public function disliketoggle($id){
        $recipe = Recipe::find($id);
        $recipe->food_staus = 0;
        $recipe->save();
        return redirect()->back();
            //return $id;
    }
}
