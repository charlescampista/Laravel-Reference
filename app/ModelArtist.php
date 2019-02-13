<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelArtist extends Model
{
    protected $table = "ModelArtist";
    
    protected $fillable = [
        'name',
        'age',
        'image',
        'description',
        'city',
        'country',
        'ethnicity'
    ];

}
