<?php

namespace App\Http\Controllers;

use App\Pizza;
use App\Ingredient;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StorePizza;
use App\Http\Resources\Pizza as PizzaResource;

class ApiController extends Controller
{
    public function index()
    {
        return PizzaResource::collection(Pizza::all());
    }

    public function store(StorePizza $request)
    {
        // dd(request()->all());
        $pizza = Pizza::create($request->except('ingredients'));

        foreach ($request->ingredients as $ingredient) {

            $newIngredient = Ingredient::firstOrCreate(['name' => $ingredient, 'name_url' => Str::snake(Str::ascii($ingredient))]);
            $pizza->ingredients()->attach($newIngredient);
        };

        return response()->json('Pizza created successfully', 200);
    }
}