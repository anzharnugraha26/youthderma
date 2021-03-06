<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductForProfile extends Model
{
    protected $fillable = [
        'name', 'description', 'howtouse', 'suitedto' , 'skinfeel' , 
        'keyingredients','ingredients','image', 'ml','price', 'weight'
    ];
}
