<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = "Car";
    protected $fillable = [
     'name',
     'image',
     'brand',
     'color'
    ];
}
