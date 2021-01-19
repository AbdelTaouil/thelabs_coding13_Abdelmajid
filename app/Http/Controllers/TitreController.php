<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Avi;
use App\Models\Button;
use App\Models\Categorie;
use App\Models\Commentaire;
use App\Models\Footer;
use App\Models\Image;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\Service;
use App\Models\Tag;
use App\Models\team;
use App\Models\Titre;
use App\Models\Video;
use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;


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
        $logo = Logo::all()[0];
        $image = Image::all();
        $button = Button::all();
        $footer = Footer::all();
        $avis= Avi::all();
        $video= Video::all();
        $dataSR= Service::
        inRandomOrder()
        ->limit(3)
        ->get();
        $teams = team::inRandomOrder()->get();

        $ok = 1;

        $imgPetit = ImageManagerStatic::make('img/' . $logo->logo)->resize(111,32);
        $imgGrand = ImageManagerStatic::make('img/' . $logo->logo)->resize(504,148);

        $imgPetit->save("img/logoPetit.jpg",100);
        $imgGrand->save("img/logoGrand.jpg",100);

        $tab = [];

        foreach($titre as $title){
            $str = Str::of($title->titre)->replace('(', '<span>');
            $str2 = Str::of($str)->replace(')','</span>');
            array_push($tab, $str2);
        }
        $service = Service::orderByDesc('id')->simplePaginate(9);



    
        return view('template.home', compact('titre','ok','teams','tab','titres','logo','button','service','dataSR','footer','avis', 'imgPetit', 'imgGrand','image','video'));
    }
    public function indexbis()
    {
        $titre =  Titre::all();
        $titres =  Navbar::all();
        $logo = Logo::all();
        $button = Button::all();
        $dataVIPD= DB::table('services')
        ->inRandomOrder()
        ->limit(3)
        ->get();
        $dataVIPR= DB::table('services')
        ->inRandomOrder()
        ->limit(3)
        ->get();
        $footer = Footer::all();
        $tab = [];

        foreach($titre as $title){
            $str = Str::of($title->titre)->replace('(', '<span>');
            $str2 = Str::of($str)->replace(')','</span>');
            array_push($tab, $str2);
        }
        $servicepage = Service::orderByDesc('id')->limit(6)->get();
        $limite = 0;
        $service = Service::orderByDesc('id')->simplePaginate(9);
        $articlerapide = Article::orderByDesc('id')->limit(3)->get();



        return view('template.service', compact('titre' ,'tab','titres','logo','button','service','dataVIPD','dataVIPR','footer','servicepage','limite','articlerapide'));
    }
    public function indexbis2()
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
        $commentaire = Commentaire::all();
        $articlerapide = Article::orderByDesc('id')->limit(3)->get();


        $tab = [];

        foreach($titre as $title){
            $str = Str::of($title->titre)->replace('(', '<span>');
            $str2 = Str::of($str)->replace(')','</span>');
            array_push($tab, $str2);
        }
        

        return view('template.blog', compact('titre','tag','categorie','article','tab','titres','logo','button','service','footer','commentaire','articlerapide'));
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
    public function edit(Titre $titre, $id)
    {
        $titre= Titre::find($id);

        return view('backend.show.edit-titre', compact('titre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titre $titre,$id)
    {
        $titre= Titre::find($id);

        $titre->titre=$request->titre;
        $titre->soustitre=$request->soustitre;
        $titre->soustitres=$request->soustitres;


        $titre->save();

        return redirect()->back();
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
