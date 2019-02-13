<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars/cars', compact('cars'));
    }

    public function create()
    {
        return view('/cars/createcar');
    }

    public function store()
    {
        $validated = request()->validate([
            'name' => ['required', 'min:3'],
            'image' => ['required', 'min:3'],
            'brand' => ['required', 'min:3'],
            'color' => ['required', 'min:3'],
        ]);
        Car::create($validated);
        return redirect('/car');
    }

    public function show(Car $car)
    {
        return view('/cars/showcar', compact('car'));
    }

    public function edit(Car $car)
    {
        return view('cars/editcar', compact('car'));
    }

    public function update(Car $car)
    {
        $car->update(request(['name', 'image', 'brand', 'color']));
        return redirect('/car');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('/car');
    }
}
