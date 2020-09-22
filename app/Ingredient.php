<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $guarded = [];

    public function pizza()
    {
        return $this->belongsToMany(Pizza::class);
    }

    // public function setNameUrlAttribute($value)
    // {
    //     return Str::snake(Str::ascii($value));
    // }
}