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
        $pizza = Pizza::create([
            'name' => request('name'),
            'name_url' => Str::snake(Str::ascii(request('name'))),
            'price' => request('price'),
        ]);
        $pizza->category()->associate(request('category_id'));
        $pizza->ingredients()->attach(request('ingredients'));
        $pizza->save();

        return response()->json('Pizza created successfully', 200);
    }

    public function show($id)
    {
        return new PizzaResource(Pizza::find($id));
    }
}