<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donator;
use App\DonatorTask;

class DonatorTaskController extends Controller
{
    public function update(DonatorTask $donatortask) {
        // $donatortask->update([
        //     'completed' => request()->has('completed')
        // ]);
        
        // if(request()->has('completed')) {
        //     $donatortask->complete(request()->has('completed'));
        // } else {
        //     $donatortask->incomplete();
        // }

        //request()->has('completed') ? $donatortask->complete() : $donatortask->incomplete();

        $method = request()->has('completed') ? 'complete' :'incomplete';
        $donatortask->$method();
        return back();
    }

    public function store($id) {

        $donator = Donator::findOrFail($id);
        $attributes = request()->validate(['description' => 'required']);
        $donator->addTask($attributes);
        return back();
    }
}
