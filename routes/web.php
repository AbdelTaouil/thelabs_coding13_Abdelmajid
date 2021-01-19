<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AviController;
use App\Http\Controllers\ButtonController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsletterController;
use App\Models\Button;
use Database\Factories\ImageFactory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('template.home');
});

Auth::routes();


Auth::routes();

// Back

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

    // Newlsetter

    Route::get('/Newsletter', [NewsletterController::class, 'index'])->middleware('auth','admin');

    Route::post('/supprimer-news/{id}', [App\Http\Controllers\NewsletterController::class, 'destroy'])->middleware('auth','admin');

    // Carousel

    Route::get('/modifier-carousel/{id}', [ImageController::class, 'edit'])->middleware('auth','admin');

    Route::post('/edit-carousel/{id}', [ImageController::class, 'update'])->middleware('auth','admin');

    Route::post('/store-carousel', [ImageController::class, 'store'])->middleware('auth','admin');

     // navbar

    Route::get('/navbar', [App\Http\Controllers\NavbarController::class, 'index'])->middleware('auth','admin');

    Route::get('/modifier-nav/{id}', [NavbarController::class, 'edit'])->middleware('auth','admin');

    Route::post('/edit-nav/{id}', [NavbarController::class, 'update'])->middleware('auth','admin');

    // contact

    Route::get('/footer', [App\Http\Controllers\FooterController::class, 'index'])->middleware('auth','admin');

    Route::get('/modifier-footer/{id}', [FooterController::class, 'edit'])->middleware('auth','admin');
     
    Route::post('/edit-footer/{id}', [FooterController::class, 'update'])->middleware('auth','admin');

    // profil

    Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->middleware('auth');

    Route::get('/modifier-user/{id}', [ProfilController::class, 'edit'])->middleware('auth');
   
    Route::post('/edit-profil/{id}', [ProfilController::class, 'update'])->middleware('auth');

    // valider Admin webmaster
   
    Route::get('/valider/{id}', [ArticleController::class, 'edit'])->middleware('auth','redacteur');

    Route::post('/edit-article/{id}', [ArticleController::class, 'update'])->middleware('auth','admin');

    Route::post('/supprimer-article/{id}', [App\Http\Controllers\ArticleController::class, 'destroy']);

    // logo

    Route::get('/logo', [App\Http\Controllers\LogoController::class, 'index'])->middleware('auth','admin');

    Route::get('/modifier-logo/{id}', [LogoController::class, 'edit'])->middleware('auth','admin');

    Route::post('/edit-logo/{id}', [LogoController::class, 'update'])->middleware('auth','admin');

    // video

    Route::get('/modifier-video/{id}', [VideoController::class, 'edit'])->middleware('auth','admin');
 
    Route::post('/edit-video/{id}', [VideoController::class, 'update'])->middleware('auth','admin');

    // Titre-sous-Titre 
 
    Route::get('/titre', [App\Http\Controllers\ButtonController::class, 'index'])->middleware('auth','admin');

    Route::get('/modifier-titre/{id}', [TitreController::class, 'edit'])->middleware('auth','admin');

    Route::post('/edit-titre/{id}', [TitreController::class, 'update'])->middleware('auth','admin');

    // Service

    Route::get('/service', [App\Http\Controllers\ServiceController::class, 'index'])->middleware('auth','admin');

    Route::get('/modifier-service/{id}', [ServiceController::class, 'edit'])->middleware('auth','admin');

    Route::post('/edit-service/{id}', [ServiceController::class, 'update'])->middleware('auth','admin');

    Route::post('/store-service', [ServiceController::class, 'store'])->middleware('auth','admin');

    Route::post('/supprimer-service/{id}', [App\Http\Controllers\ServiceController::class, 'destroy']);
   

    // button

    Route::get('/modifier-button/{id}', [ButtonController::class, 'edit'])->middleware('auth','admin');

    Route::post('/edit-button/{id}', [ButtonController::class, 'update'])->middleware('auth','admin');



    // mail

    Route::get('/mailbox', [MailController::class, 'index'])->middleware('auth','admin');

    Route::get('/voir-mail/{id}', [MailController::class, 'edit'])->middleware('auth','admin');


// Admin

    // Team

    Route::get('/team', [TeamController::class, 'index'])->middleware('auth','admin');

    Route::get('/modifier-team/{id}', [TeamController::class, 'edit'])->middleware('auth','admin');

    Route::post('/edit-team/{id}', [TeamController::class, 'update'])->middleware('auth','admin');

    Route::post('/store-team', [TeamController::class, 'store'])->middleware('auth','admin');

    Route::post('/supprimer-team/{id}', [App\Http\Controllers\TeamController::class, 'destroy']);


    // Avis

    Route::get('/modifier-avis/{id}', [AviController::class, 'edit'])->middleware('auth','admin');

    Route::post('/edit-avis/{id}', [AviController::class, 'update'])->middleware('auth','admin');

    Route::post('/store-avis', [AviController::class, 'store'])->middleware('auth','admin');

    Route::post('/supprimer-avis/{id}', [App\Http\Controllers\AviController::class, 'destroy']);

    // Page redacteur

    Route::get('/redacteur', [App\Http\Controllers\ArticleController::class, 'index'])->middleware('redacteur');

    Route::post('/store-article', [App\Http\Controllers\ArticleController::class, 'store']);

    Route::post('/supprimer-carousel/{id}', [App\Http\Controllers\ArticleController::class, 'destroy']);

    Route::post('/attach/{id}', [ArticleController::class, 'attach']);


// Page Home

Route::get('/', [App\Http\Controllers\TitreController::class, 'index']);

Route::post('/create-carousel', [App\Http\Controllers\ImageController::class, 'store']);

Route::post('/supprimer-carousel/{id}', [App\Http\Controllers\ImageController::class, 'destroy']);



// Route::post('/attach/{id}', [ArticleController::class, 'attachbis']);


// Page Service 

Route::get('/Services', [App\Http\Controllers\TitreController::class, 'indexbis']);

// Page Blog
Route::get('/search', [ArticleController::class , 'search']);

Route::get('/Blog', function () {
    return view('template.blog');
});

Route::get('/Blog', [App\Http\Controllers\TitreController::class, 'indexbis2']);
    
Route::get('/blogbis', [App\Http\Controllers\TagController::class, 'index']);

Route::get('/commentaire/{id}', [App\Http\Controllers\TagController::class, 'edit']);

Route::post('/store-commentaire', [App\Http\Controllers\CommentaireController::class, 'store']);



// Page Contact

Route::get('/Contact', [App\Http\Controllers\ContactController::class, 'index']);


// Email

Route::post('/send-email', [MailController::class, 'sendEmail']); 

Route::post('/send-contact', [MailController::class, 'sendcontact']); 

Route::post('/send-article/{id}', [MailController::class, 'sendArticle']); 
