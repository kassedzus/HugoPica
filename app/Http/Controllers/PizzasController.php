<?php

namespace App\Http\Controllers;

use App\Pizza;
use App\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PizzasController extends Controller
{
    public function index()
    {
        if (request('ingredient')) {
            $pizzas = Ingredient::where('name', request('ingredient'))->firstOrFail()->pizza;
        } else if (request('category')) {
            $pizzas = Pizza::where('category', request('category'))->get();
        } else {
            $pizzas = Pizza::all();
        }

        return view('picas.picas', ['pizzas' => $pizzas]);
    }

    public function show($id)
    {
        $pizza = Pizza::find($id);

        return view('picas.show', ['pizza' => $pizza]);
    }

    public function cart()
    {
        return view('picas.cart');
    }

    public function addToCart($id)
    {
        $pizza = Pizza::find($id);

        if (!$pizza) {

            abort(404);
        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if (!$cart) {

            $cart = [
                $id => [
                    "name" => $pizza->name,
                    "quantity" => 1,
                    "price" => $pizza->price,
                    "avatar" => $pizza->avatar
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Iepirkumu grozs papildināts veiksmīgi');
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Iepirkumu grozs papildināts veiksmīgi');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $pizza->name,
            "quantity" => 1,
            "price" => $pizza->price,
            "avatar" => $pizza->avatar
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Iepirkumu grozs papildināts veiksmīgi');
    }

    public function update(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }
}