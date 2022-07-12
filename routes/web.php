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
    $recipes = Recipe::all();
    return view('welcome', compact('recipes'));
});
Route::post('/', function () {
    $recipes = Recipe::all();
    return view('welcome', compact('recipes'));
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return $recipes = Recipe::all();
    //return view('contact');
});
Route::get('/recipe', [RecipeController::class,'index']);
Route::get('/recipeToggle', [RecipeController::class, 'toggleStatus']);
//Route::get('/');

