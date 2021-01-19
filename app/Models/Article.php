<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Article extends Model

{
    use Notifiable;
    use HasFactory;
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }
    public function users()
    {
        return $this->belongsTo('App\Models\User', "user_id");
    }
}
