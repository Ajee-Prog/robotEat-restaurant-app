<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Hppt\Controllers\RecipeController;
use App\Recipe;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    //$btn_full = '<button type="submit" id="toggleLike"  class="card-link btn btn-primary toggle-class" data-onstyle="primary" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" ><i class="bi bi-hand-thumbs-up-fill"></i></button>';
        $btn_color = 'card-link btn btn-primary';
        $btn_color_danger = 'card-link btn btn-danger';
        $class = 'class';
         $btn_icon_up = ' bi-hand-thumbs-up-fill';
        //  $btn_icon_down = '<button type="submit" id="toggleLike"  class="card-link btn {{$btn_color_danger}} toggle-class" >{{$recipe->food_staus}}<i class="bi bi-hand-thumbs-down-fill"></i>;
         $btn_icon_down = ' bi-hand-thumbs-down-fill';


    $recipes = Recipe::all();
    return view('welcome', compact('recipes',  'btn_icon_down', 'btn_icon_up', 'btn_color', 'class', 'btn_color_danger'));
});
//Route::get('/', 'RecipeController@toggleStatus');

Route::post('/', function () {
    $recipes = Recipe::all();
    return view('welcome', compact('recipes'));
});

Route::get('/about', 'RecipeController@about' );
Route::get('/contact', function () {
    return $recipes = Recipe::all();
    //return view('contact');
});
Route::get('/recipe', [RecipeController::class,'index']);
Route::get('/recipeToggle', [RecipeController::class, 'toggleStatus']);
 Route::get('/toggle', 'RecipeController@toggleStatuss');

//Route::get('/');
Route::get('/liketoggle/{id}', 'RecipeController@liketoggle');
// Route::get('/liketoggle/{id}',  function ($id){
//         //dd(Recipe::find($id));
//         $recipe = Recipe::find($id);
//         $recipe->food_staus = 1;
//         $recipe->save();
//         return redirect()->back();
//             //return $id;
//     });

