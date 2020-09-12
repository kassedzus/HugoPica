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
            // 'name_url' => $this->name_url,
            'category' => $this->category,
            // 'category_url' => $this->category_url,
            'ingredients' => IngredientResource::collection($this->ingredients),
            'price' => $this->price,
            'link' => url('/picas/' . $this->id . '/'),
            'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
        ];
        // return parent::toArray($request);
    }

    // public function with($request)
    // {
    //     return [
    //       'version' => '2.0.0',
    //       'owner' => 'Edzus Kass',
    //       'license' => 'MIT',  
    //     ];
    // }

    public static $wrap = 'pizza';
}