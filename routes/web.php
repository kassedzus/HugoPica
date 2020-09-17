<?php

use App\Http\Controllers\ApiController;
use App\Pizza;
use App\Ingredient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\Pizza as PizzaResource;
// use App\Http\Resources\Ingredient as IngredientResource;

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
    return view('index');
});

Route::get('/picas', 'PizzasController@index');
Route::get('/picas/{pica}', 'PizzasController@show')->name('showpizza');
Route::get('/grozs', 'PizzasController@cart');
Route::get('/pievienot-grozam/{id}', 'PizzasController@addToCart');
Route::patch('/update-cart', 'ProductsController@update');
Route::delete('/remove-from-cart', 'ProductsController@remove');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/json', 'ApiController@listPizzas');
// Route::post('/json', 'ApiController@createPizza');

// Route::middleware('auth:sanctum')->get('/json', 'ApiController@listPizzas');
// Route::middleware('auth:sanctum')->post('/json', 'ApiController@createPizzas');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/json', 'ApiController@listPizzas');
    Route::post('/json', 'ApiController@createPizza');
});