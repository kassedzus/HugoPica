<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function pizza()
    {
        return $this->belongsToMany(Pizza::class);
    }
}