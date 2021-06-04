<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    // protected $table = 'alamat';
    protected $fillable = ['user_id','phone','cities_id','detail'];
}
