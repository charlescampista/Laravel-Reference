<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelArtist;

class ModelArtistController extends Controller
{
    public function index() {
        $models = ModelArtist::all();
        
        return view('modelartists/models',[
            'models' => $models,
        ]);
    }

    public function create() {
        return view('modelartists/createmodel');
    }

    public function show(ModelArtist $model) {
        return view('/modelartists/showmodel',compact('model'));
    }

    public function edit(ModelArtist $model) {
        return view('modelartists/editmodel',compact('model'));
    }

    public function update(ModelArtist $model) {
        $model->update(request(['name','age','image','description','city','country','ethnicity']));
        return redirect('/models');
    }

    public function destroy(ModelArtist $model) {
        $model->delete();
        return redirect('/models');
    }

    public function store() {
        ModelArtist::create(request(['name','age','image','description','city','country','ethnicity']));
        return redirect('/models');
    }
}
