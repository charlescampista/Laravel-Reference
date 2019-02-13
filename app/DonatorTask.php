<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonatorTask extends Model
{
    protected $table = 'DonatorTask';
    protected $fillable = [
        'donator_id',
        'description',
        'completed'
    ];

    public function donator() {
        return $this->belongsTo(Donator::class);
    }

    public function complete($completed = true) {
        $this->update(compact('completed'));
    }

    public function incomplete() {
        $this->complete(false);
    }

}
