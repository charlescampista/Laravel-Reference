<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donator;

class DonatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $donators = Donator::all();
        return view('/donators/donators',[
            'donators' => $donators,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('/donators/createdonator');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Donator::create(request(['name','image','description','donation']));
        return redirect('/donator');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Donator $donator)
    {
        return view('donators/showdonator',compact('donator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Donator $donator) //localhost:<port>/donator/{index}/edit
    {   
        return view('donators/editdonator',compact('donator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Donator $donator)
    {
        $donator->update(request(['name','image','description','donation']));
        return redirect('/donator');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donator $donator)
    {
        $donator->delete();
        return redirect('/donator');
    }
}
