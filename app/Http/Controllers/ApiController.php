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

        // $validated = $this->validatePizza();

        // $newPizza = new Pizza($validated);
        // $newPizza->save();

        // $successMessage = ['message' => 'Pizza created successfully'];

        // return json_encode($successMessage);
    }

    public function validatePizza()
    {
        return request()->validate([
            'name' => 'required|unique:pizzas|between:4,30|ends_with:pica',
            'name_url' => 'alpha_dash',
            'category' => 'required|in:Cūkgaļas,Vistas,Liellopa,Bez gaļas,Veģetārā,Vegānā,Zivju|between:4,30',
            'category_url' => 'alpha_dash',
            'price' => 'required|between:3,5',
        ]);
    }
}