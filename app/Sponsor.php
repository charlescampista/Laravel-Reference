<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $table = 'Sponsor';

    protected $fillable = [
        'name',
        'image',
        'description',
        'country',
        'slogan'
    ];
}
