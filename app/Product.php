<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'ml', 'description', 'howtouse' , 'suitedto' , 'skinfeel','ingredients'
    ];
}
