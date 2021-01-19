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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article= Article::all();
        $user= User::all();
        $tag= Tag::all();
        $categorie= Categorie::all();

        return view('backend.redacteur', compact('article','user','tag','categorie'));
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
        $article=new Article;
        $article->description=$request->description;
        $article->titre=$request->titre;
        $article->check=$request->check;
        $article->src=$request->file('src')->hashName();
        $article->user_id=Auth::user()->id;
        $article->save();
        $request->file('src')->storePublicly('img','public');
        $article->tags()->syncWithoutDetaching($request->cats);
        $article->categories()->syncWithoutDetaching($request->cat);
   

        return redirect()->back();
    }

    public function search()
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

        $search_text = $_GET['query'];

        $article = Article::where('titre','LIKE','%'. $search_text .'%')->get();

        return view('template.blogsearch', compact('titre','tag','categorie','article','titres','logo','button','service','footer','commentaire','article'));



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article= Article::find($id);
        $user= User::all();
        $tag= Tag::all();
        $categorie= Categorie::all();

        return view('backend.show.edit-article', compact('article','user','tag','categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $article= article::find($id);
    
        $article->src=$request->file('src')->hashName();
        $article->titre=$request->titre;
        $article->check=$request->check;
        $article->description=$request->description;
        $this->authorize('AdminWebmaster',$article);

        $article->save();
    
        Storage::disk('public')->delete('img/' . $article->image);
    
        $request->file('src')->storePublicly('img','public');

        $article->tags()->syncWithoutDetaching($request->cats);

        $article->categories()->syncWithoutDetaching($request->cat);
    
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
 
        public function destroy($id)
        {
            $article=Article::find($id);
            Article::find($id)->tags()->detach();
            Article::find($id)->categories()->detach();
            $article->delete();

            Storage::disk('public')->delete('img/' . $article->src);

            return redirect()->back();
        }

}
