<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePizza;
use App\Pizza;
use Illuminate\Http\Request;
use App\Http\Resources\Pizza as PizzaResource;
use GuzzleHttp\Psr7\Request as Psr7Request;

class ApiController extends Controller
{
    public function listPizzas()
    {
        return PizzaResource::collection(Pizza::all());
    }

    public function createPizza(StorePizza $request)
    {

        $validated = $request->validated();

        // return json_encode($request->json());
        $newPizza = new Pizza($validated);
        $newPizza->save();

        $successMessage = ['message' => 'Pizza created successfully'];

        return json_encode($successMessage);
    }
}