<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $guarded = [];

    public function pizza()
    {
        return $this->belongsToMany(Pizza::class);
    }
}