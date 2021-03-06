<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo('App\Models\User', "user_id", "id");
    }
    public function emploie()
    {
        return $this->belongsTo('App\Models\Emploie', "emploie_id");
    }
}
