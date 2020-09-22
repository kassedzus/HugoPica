<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\PizzasController;
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

Route::get('/picas', 'PizzasController@index')->name('pizza.index');
Route::post('/picas', 'PizzasController@store')->name('pizza.store');
Route::get('/picas/create', 'PizzasController@create')->name('pizza.create');
Route::get('/picas/{pica}', 'PizzasController@show')->name('pizza.show');


Route::get('/grozs', 'CartController@cart');
Route::get('/pievienot-grozam/{id}', 'CartController@addToCart');
Route::patch('/update-cart', 'CartController@update');
Route::delete('/remove-from-cart', 'CartController@remove');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');