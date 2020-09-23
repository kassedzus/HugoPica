<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class StorePizza extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:pizzas|between:4,30|ends_with:pica',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|between:3,5',
            'ingredients' => 'required|exists:ingredients,id'
        ];
    }
}