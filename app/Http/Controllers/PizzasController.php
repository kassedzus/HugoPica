<?php

namespace App\Http\Controllers;

use App\Pizza;
use App\Category;
use App\Ingredient;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StorePizza;
use Illuminate\Support\Facades\Auth;

class PizzasController extends Controller
{
    public function index()
    {
        if (request('ingredient')) {
            $pizzas = Ingredient::where('name', request('ingredient'))->firstOrFail()->pizza;
        } else if (request('category')) {
            $pizzas = Pizza::where('category_id', request('category'))->get();
        } else {
            $pizzas = Pizza::all();
        }

        return view('picas.index', ['pizzas' => $pizzas]);
    }

    public function show($id)
    {
        $pizza = Pizza::find($id);

        return view('picas.show', ['pizza' => $pizza]);
    }

    public function create()
    {
        return view('picas.create', ['categories' => Category::all(), 'ingredients' => Ingredient::all()]);
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

        return redirect()->route('pizza.index')->with('status', 'Pica veiksmīgi izveidota!');
    }
}