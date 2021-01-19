<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Button;
use App\Models\Categorie;
use App\Models\Commentaire;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\Service;
use App\Models\Tag;
use App\Models\Titre;
use App\Models\User;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
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
        $article = Article::all();
        $tag = Tag::all();
        $categorie = Categorie::all();
        $comm = Commentaire::all();


        $tab = [];

        foreach($titre as $title){
            $str = Str::of($title->titre)->replace('(', '<span>');
            $str2 = Str::of($str)->replace(')','</span>');
            array_push($tab, $str2);
        }
        

        return view('template.blogbis', compact('titre','tag','categorie','article','tab','titres','logo','button','service','footer','comm'));
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
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag,$id)
    {
        $article= Article::find($id);
        $titre =  Titre::all();
        $titres =  Navbar::all();
        $logo = Logo::all();
        $button = Button::all();
        $service = Service::all();
        $footer = Footer::all();
        $tag = Tag::all();
        $categorie = Categorie::all();
        $commentaire = Commentaire::all();
        $tour = 1;

        $tab = [];

        foreach($titre as $title){
            $str = Str::of($title->titre)->replace('(', '<span>');
            $str2 = Str::of($str)->replace(')','</span>');
            array_push($tab, $str2);
        }

        return view('template.blogbis', compact('titre','tag','categorie','article','tab','titres','logo','button','service','footer','commentaire','tour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
