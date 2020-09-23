<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Ingredient as IngredientResource;
use App\Ingredient;

class Pizza extends JsonResource
{



    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category' => $this->category->name,
            'ingredients' => IngredientResource::collection($this->ingredients),
            'price' => $this->price,
        ];
    }

    public static $wrap = 'pizza';
}