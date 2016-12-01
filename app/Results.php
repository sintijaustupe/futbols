<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Teams;
use App\Player;

class Results extends Model
{
    protected $fillable = [
        'teamA', 'teamB', 'result'
    ];
    
    public function teams() { 
        return $this->hasMany('App\Teams');
    }

}

