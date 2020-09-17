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
    }
}