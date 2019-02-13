<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donator extends Model
{
    protected $table = 'Donator';

    protected $fillable = [
        'name',
        'image',
        'description',
        'donation',
    ];

    public function tasks(){
        return $this->hasMany(DonatorTask::class);
    }

    public function addTask($task) {
        
       //here the laravel and eloquent apply the project id automaticaly because of the instance
       
       $this->tasks()->create($task);

        // DonatorTask::create([
        //     'donator_id' => $this->id,
        //     'description' => request('description'),
        // ]);
    }


}
