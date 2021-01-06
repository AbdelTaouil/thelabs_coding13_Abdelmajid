<?php

namespace App\Http\Controllers;

use App\Models\Avi;
use App\Models\Button;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\Service;
use App\Models\Titre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TitreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titre =  Titre::all();
        $titres =  Navbar::all();
        $logo = Logo::all();
        $button = Button::all();
        $service = Service::all();
        $footer = Footer::all();
        $avis= Avi::all();
        $dataSR= DB::table('services')
        ->inRandomOrder()
        ->limit(3)
        ->get();
       

    
        return view('template.home', compact('titre','titres','logo','button','service','dataSR','footer','avis'));
    }
    public function indexbis()
    {
        $titre =  Titre::all();
        $titres =  Navbar::all();
        $logo = Logo::all();
        $button = Button::all();
        $service = Service::all();
        $dataVIPD= DB::table('services')
        ->where('vip','oui')
        ->inRandomOrder()
        ->limit(3)
        ->get();
        $dataVIPR= DB::table('services')
        ->where('vip','oui')
        ->inRandomOrder()
        ->limit(3)
        ->get();
        $footer = Footer::all();


        return view('template.service', compact('titre','titres','logo','button','service','dataVIPD','dataVIPR','footer'));
    }
    public function indexbis2()
    {
        $titre =  Titre::all();
        $titres =  Navbar::all();
        $logo = Logo::all();
        $button = Button::all();
        $service = Service::all();
        $footer = Footer::all();


        return view('template.blog', compact('titre','titres','logo','button','service','footer'));
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
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function show(Titre $titre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function edit(Titre $titre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titre $titre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titre $titre)
    {
        //
    }
}
