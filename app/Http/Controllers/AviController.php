<?php

namespace App\Http\Controllers;

use App\Models\Avi;
use App\Models\team;
use Illuminate\Http\Request;

class AviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $avis=new Avi;
        $avis->text=$request->text;
        $avis->team_id=$request->team_id;

        $avis->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avi  $avi
     * @return \Illuminate\Http\Response
     */
    public function show(Avi $avi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avi  $avi
     * @return \Illuminate\Http\Response
     */
    public function edit(Avi $avi,$id)
    {
        $avis= Avi::find($id);
        $team= team::all();

        return view('backend.show.edit-avis', compact('avis','team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Avi  $avi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avi $avi, $id)
    {
        $avis= Avi::find($id);

        $avis->text=$request->text;
        $avis->team_id=$request->team_id;

        $avis->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avi  $avi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avi $avi, $id)
    {

        $avis = Avi::find($id);

        $avis->delete();

        return redirect()->back();

    }
}
