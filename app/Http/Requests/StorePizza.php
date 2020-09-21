<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class StorePizza extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:pizzas|between:4,30|ends_with:pica',
            'name_url' => 'alpha_dash|unique:pizzas',
            'category' => 'required|in:Cūkgaļas,Vistas,Liellopa,Bez gaļas,Veģetārā,Vegānā,Zivju|between:4,30',
            'category_url' => 'alpha_dash',
            'price' => 'required|between:3,5',
        ];
    }
}