<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avi extends Model
{
    use HasFactory;
    public function team()
    {
        return $this->belongsTo('App\Models\team', "team_id");
    }
}
