<?php

namespace App\Http\Controllers;

use App\Models\Avi;
use App\Models\Emploie;
use App\Models\team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team= team::all();
        $avis= Avi::all();
        $emploie = Emploie::all();

        return view('backend.team', compact('team', 'avis','emploie'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team=new Team;
        $team->src=$request->file('src')->hashName();
        $team->nom=$request->nom;
        $team->emploie_id=$request->emploie_id;

        $team->save();
        $request->file('src')->storePublicly('img','public');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(team $team,$id)
    {
        $team= team::find($id);
        $emploie= Emploie::all();

        return view('backend.show.edit-team', compact('team','emploie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, team $team, $id)
    {
        $team= team::find($id);

        $team->src=$request->file('src')->hashName();
        $team->nom=$request->nom;
        $team->emploie_id=$request->emploie_id;

        $team->save();

        Storage::disk('public')->delete('img/' . $team->src);

        $request->file('src')->storePublicly('img','public');



        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(team $team, $id)
    {
         $team = team::find($id);

        $team->delete();
        
        Storage::disk('public')->delete('img/' . $team->src);

        return redirect()->back();
    }
}
