<?php

namespace App\Http\Controllers;

use App\Mail\Contactsender;
use App\Mail\TestMail;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Newsletter;
use App\Models\User;
use App\Notifications\messagePublished;
use App\Notifications\NewsletterMessage;
use Database\Seeders\ContactSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mail =  Contact::all();
        $counter = 1;

        return view('backend/mailbox', compact('mail','counter'));
    }
    public function sendEmail(Request $request)
    {   
        $validateForm = $request->validate([
            "email" => "required",
        ]);

        $newNewsletter = new Newsletter();

        $newNewsletter->email = $request->email;

        $allNews = Newsletter::all();

        foreach ($allNews as $elem) {
            if ($elem->email == $newNewsletter->email) {
                $elem->notify(new NewsletterMessage($newNewsletter));
            } else {
            }
        }
        $newNewsletter->save();

        return redirect()->back();
    }

    public function sendcontact(Request $request)
    {

        $contact = [
            "nom" => "Message de " . $request->nom,
            'sujet' => $request->sujet,
            'message' => $request->message, 
        ];

        $contact = new Contact;

        $contact->nom = $request->nom;
        $contact->email = $request->email;
        $contact->sujet = $request->sujet;
        $contact->message = $request->message;

        Mail::to('abdelmajidtg.pro@gmail.com')->send(new Contactsender($contact));
        
        $contact->save();


        return redirect()->back();
    }
    public function sendArticle(Request $request, $id)
    {

        $newArticle = Article::find($id);
        $newArticle->check = $request->check;

        $mails = Newsletter::all();

        foreach ($mails as $elem) {
            $elem->notify(new messagePublished($newArticle));
        }

        $newArticle->save();

        return redirect()->back();

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
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function edit(Mail $mail,$id)
    {
        $mail= Contact::find($id);
        return view('backend.show.edit-mail', compact('mail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mail $mail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mail $mail)
    {
        //
    }
}
