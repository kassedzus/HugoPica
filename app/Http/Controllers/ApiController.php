<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePizza;
use App\Pizza;
use Illuminate\Http\Request;
use App\Http\Resources\Pizza as PizzaResource;

class ApiController extends Controller
{
    public function listPizzas(Request $request)
    {
        return PizzaResource::collection(Pizza::all());
    }

    public function createPizza(StorePizza $request)
    {
        $validated = $request->validated();

        $newPizza = new Pizza(request('name', 'name_url', 'category', 'category_url', 'price'));
        $newPizza->save();

        return redirect(url('/json'));

        // $article = new Article(request(['title', 'excerpt', 'body']));
        // $article->user_id = 4;
        // $article->save();

        // $article->tags()->attach(request('tags'));

        // return redirect(route('articles.index'));
    }
}