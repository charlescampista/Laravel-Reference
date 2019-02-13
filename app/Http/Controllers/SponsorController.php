<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sponsor;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $sponsors = Sponsor::all();


        return view('/sponsors/sponsors',[
            'sponsors' => $sponsors,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sponsors/createsponsor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sponsor = new Sponsor();
        $sponsor->name = request('name');
        $sponsor->image = request('image');
        $sponsor->description = request('description');
        $sponsor->country = request('country');
        $sponsor->slogan = request('slogan');

        $sponsor->save();
        
        return redirect('/sponsor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        return view('sponsors/showsponsor',compact('sponsor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //localhost:<port>/{index}/edit
    {
        $sponsor = Sponsor::find($id);
        
        return view('sponsors/editsponsor',compact('sponsor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $sponsor = Sponsor::findOrFail($id);
        $sponsor->name = request('name');
        $sponsor->image = request('image');
        $sponsor->description = request('description');
        $sponsor->country = request('country');
        $sponsor->slogan = request('slogan');
        $sponsor->save();
        
        return redirect('/sponsor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sponsor::findOrFail($id)->delete();
        return redirect('/sponsor');
    }
}
