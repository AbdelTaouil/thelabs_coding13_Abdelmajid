<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Logo;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::all()[0];
        $image = Image::all();
        $video = Video::all();



        return view('backend.logo', compact('logo','image','video'));


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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit(Logo $logo, $id)
    {
        $logo= Logo::find($id);

        $imgPetit = ImageManagerStatic::make('img/' . $logo->logo)->resize(111,32);
        $imgGrand = ImageManagerStatic::make('img/' . $logo->logo)->resize(504,148);

        $imgPetit->save("img/logoPetit.jpg",100);
        $imgGrand->save("img/logoGrand.jpg",100);



        return view('backend.show.edit-logo', compact('logo','imgPetit', 'imgGrand',));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logo $logo, $id)
    {
        $logo= Logo::find($id);

        $logo->logo=$request->file('logo')->hashName();


        $logo->save();

        Storage::disk('public')->delete('img/' . $logo->logo);

        $request->file('logo')->storePublicly('img','public');



        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logo $logo)
    {
        //
    }
}
